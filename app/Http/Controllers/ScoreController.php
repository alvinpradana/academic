<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use App\Models\Classes;
use App\Models\ClassGroup;
use App\Models\Lesson;
use App\Models\Score;
use App\Models\Semester;
use App\Models\StudentScore;
use App\Models\User;
use App\Models\UserComplement;
use Auth;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function __construct() {
        // $this->middleware('teacher|admin')->except(['index', 'list_of_class', 'list', 'view', 'semesters', 'create']);
    }
    
    public function index() {
        $academic_year = AcademicYear::orderBy('title', 'asc')->get();
        $count = $academic_year->count();
        return view('students.scores.academic-year', [
            'academics' => $academic_year,
            'count' => $count
        ]);
    }

    public function listOfClass($academic_year) {
        $class = Classes::with([
            'majors',
            'levels',
            'grades'
        ])->orderBy('id', 'asc')->get();

        $count = $class->count();

        return view('students.scores.index', [
            'class' => $class,
            'academic' => $academic_year,
            'count' => $count
        ]);
    }

    public function semesters($academic_year, $class) {
        $semesters = Semester::orderBy('id', 'asc')->get();
        $count = count($semesters);

        return view('students.scores.semesters', [
            'semesters' => $semesters,
            'count' => $count,
            'academic' => $academic_year,
            'class' => $class
        ]);
    }

    public function taskOrFinalTask($academic_year, $class, $semester) {
        return view('students.scores.task', [
            'semester' => $semester,
            'academic' => $academic_year,
            'class' => $class
        ]);
    }

    public function list($academic_year, $class, $semester) {
        $scores = Score::with('lesson')
                        ->where('class_id', $class,)
                        ->where('semester_id', $semester)
                        ->where('academic_year', $academic_year)
                        ->orderBy('id', 'desc')
                        ->paginate(5);
        $count = $scores->count();
        $scores_clas = Classes::where('id', $class)->first();
        $class_group_count = ClassGroup::where('class_id', $class)->count();

        return view('students.scores.list', [
            'scores' => $scores,
            'class' => $class,
            'semester' => $semester,
            'academic_year' => $academic_year,
            'scores_class' => $scores_clas,
            'class_group_count' => $class_group_count,
            'count' => $count
        ]);
    }

    public function view($academic_year, $class, $semester, $score) {
        $student_scores = StudentScore::with([
            'scores',
            'students.student_complements',
            'students.user_complements'
        ])->where('score_id', $score)
        ->where('is_active', true)
        ->orderBy('student_id', 'asc')
        ->get();
        $scores_clas = Classes::where('id', $class)->first();
        
        return view('students.scores.view', [
            'student_scores' => $student_scores,
            'class' => $class,
            'score_id' => $score,
            'academic' => $academic_year,
            'scores_class' => $scores_clas,
            'semester' => $semester
        ]);
    }

    public function listFinalTask($academic_year, $class, $semester) {
        $class_level = Classes::where('id', $class)->pluck('class_level_id')->first();
        $lessons = Lesson::where('class', $class_level)->orderBy('id', 'desc')->paginate(5);
        $count = $lessons->count();
        $index = 1;

        return view('students.scores.final-task', [
            'lessons' => $lessons,
            'count' => $count,
            'semester' => $semester,
            'academic' => $academic_year,
            'class' => $class,
            'index' => $index
        ]);
    }

    public function finalTaskTable($academic_year, $class, $semester, $lesson_id) {
        $lesson = Lesson::where('id', $lesson_id)->pluck('title')->first();
        $scores = Score::with('student_scores')->where('lesson_id', $lesson_id)->where('semester_id', $semester)->get();
        $students = User::with([
            'user_complements', 
            'student_complements'
            ])->where('users.position_id', 2)->get();
        $scores_item = array();

        foreach ($scores as $score) {
            foreach ($score->student_scores as $item) {
                foreach ($students as $student) {
                    if ($student->id == $item->student_id) {
                        array_push($scores_item,  array(
                            'id' => $student->id,
                            'nip' => $student->student_complements->nip_number,
                            'name' => $student->user_complements->name,
                            'score' => $item->score
                        ));
                    }
                }
            }
        }

        function createFinalScores ($array_scores) {
            $result = [];
            foreach ($array_scores as $item) {
                $id = $item['id'];
                if (!isset($result[$id])) {
                    $result[$id] = [
                        'id' => $id,
                        'nip' => $item['nip'],
                        'name' => $item['name'],
                        'total_score' => 0,
                        'count' => 0
                    ];
                }
                $result[$id] ['total_score'] += $item['score'];
                $result[$id] ['count'] += 1;
            }
            foreach ($result as $id => $data) {
                $result[$id] ['average_score'] = number_format($data['total_score'] / $data['count'], 2);
                unset($result[$id] ['total_score'], $result[$id] ['count']);
            }
            return array_values($result);
        }

        $final_scores = createFinalScores($scores_item);
        usort($final_scores, function($a, $b) {
            return strcmp($a['nip'], $b['nip']);
        });
        
        return view('students.scores.final-task-table', [
            'academic' => $academic_year,
            'class' => $class,
            'semester' => $semester,
            'lesson' => $lesson,
            'final_scores' => $final_scores,
            'index' => 1
        ]);
    }

    public function raporScores($academic, $class) {
        $scores = Score::with('student_scores')->where('academic_year', $academic)->where('class_id', $class)->get();
        $students = User::with([
            'user_complements', 
            'student_complements'
            ])->where('users.position_id', 2)->get();
        $array_scores = [];

        foreach ($scores as $score) {
            foreach ($score->student_scores as $item_score) {
                foreach ($students as $student) {
                    if ($student->id == $item_score->student_id) {
                        array_push($array_scores,  array(
                            'id' => $student->id,
                            'nip' => $student->student_complements->nip_number,
                            'name' => $student->user_complements->name,
                            'score' => $item_score->score
                        ));
                    }
                }
            }
        }

        function createRaporScores($array_rapor_scores) {
            $result = [];
            foreach ($array_rapor_scores as $item) {
                $id = $item['id'];
                if (!isset($result[$id])) {
                    $result[$id] = [
                        'id' => $id,
                        'nip' => $item['nip'],
                        'name' => $item['name'],
                        'total_score' => 0,
                        'count' => 0
                    ];
                }
                $result[$id] ['total_score'] += $item['score'];
                $result[$id] ['count'] += 1;
            }
            foreach ($result as $id => $data) {
                $result[$id] ['average_score'] = number_format($data['total_score'] / $data['count'], 2);
                unset($result[$id] ['total_score'], $result[$id] ['count']);
            }
            return array_values($result);
        }
        $final_rapor_scores = createRaporScores($array_scores);
        usort($final_rapor_scores, function($a, $b) {
            return strcmp($a['nip'], $b['nip']);
        });
        $count = $scores->count();

        return view('students.scores.rapor', [
            'final_rapor_scores' => $final_rapor_scores,
            'count' => $count,
            'academic' => $academic,
            'class' => $class,
            'index' => 1
        ]);
    }

    public function add($academic_year, $class, $semester) {
        $students = ClassGroup::where('class_id', $class)
                            ->where('is_active', true)
                            ->with('users.user_complements')
                            ->get();
        $semesters = Semester::orderBy('id', 'asc')->get();
        $lessons = Lesson::orderBy('id', 'asc')->get();
        $teacher = UserComplement::where('user_id', Auth::user()->id)->first();
        $academic = AcademicYear::findOrFail($academic_year)->pluck('title')->first();
        $count = $students->count();
        
        return view('students.scores.create', [
            'semesters' => $semesters,
            'semester' => $semester,
            'lessons' => $lessons,
            'students' => $students,
            'count' => $count,
            'class' => $class,
            'teacher' => $teacher,
            'academic' => $academic,
            'academic_year' => $academic_year
        ]);
    }

    public function store(Request $request) {
        $data = [];
        $index = $request->count;

        $request->validate([
            'semester' => ['required'],
            'lesson' => ['required'],
            'task' => ['required'],
            'teacher' => ['required']
        ]);
        
        Score::insert([
            'semester_id' => $request->semester,
            'class_id' => $request->class,
            'lesson_id' => $request->lesson,
            'teacher_id' => Auth::user()->id,
            'task_name' => $request->task,
            'teacher_name' => $request->teacher,
            'academic_year' => $request->academic_year,
            'created' => date('Y-m-d')
        ]);

        $score = Score::latest('id')->first();
        foreach ($request->student as $key) {
            $index--;
            array_push($data, [
                'score_id' => $score->id,
                'student_id' => $request->student[$index],
                'score' => $request->input('score_'. $index),
                'notes' => $request->notes[$index],
            ]);
        }

        // $request->validate([
        //     'score_'. $index => ['required', 'numeric']
        // ]);
        
        StudentScore::insert($data);
        return redirect()->route('scores.list', [$request->academic_year, $request->class, $request->semester])->with('success', 'Data nilai berhasil disimpan.');
    }

    public function edit($academic_year, $class, $semester, $score) {
        $students = ClassGroup::where('class_id', $class)->where('is_active', true)->with('users.user_complements')->get();
        $semesters = Semester::orderBy('id', 'asc')->get();
        $lessons = Lesson::orderBy('id', 'asc')->get();
        $scores = Score::where('id', $score)->first();
        $student_scores = StudentScore::with([
            'scores',
            'students.student_complements',
            'students.user_complements'
        ])->where('score_id', $score)->where('is_active', true)->orderBy('student_id', 'asc')->get();

        return view('students.scores.edit', [
            'student_scores' => $student_scores,
            'scores' => $scores,
            'semesters' => $semesters,
            'semester' => $semester,
            'class' => $class,
            'score' => $score,
            'lessons' => $lessons,
            'students' => $students,
            'academic_year' => $academic_year
        ]);
    }

    public function update(Request $request, $class, $score) {
        $data = [];
        $index = $request->count;

        $request->validate([
            'semester' => ['required'],
            'lesson' => ['required'],
            'task' => ['required'],
            'teacher' => ['required']
        ]);

        Score::where('id', $score)->update([
            'semester_id' => $request->semester,
            'class_id' => $request->class,
            'lesson_id' => $request->lesson,
            'teacher_id' => Auth::user()->id,
            'task_name' => $request->task,
            'teacher_name' => $request->teacher
        ]);

        foreach ($request->student as $key) {
            $index--;
            array_push($data, [
                'score_id' => $score,
                'student_id' => $request->student[$index],
                'score' => $request->input('score_'. $index),
                'notes' => $request->notes[$index],
            ]);

            $request->validate([
                'score_'. $index => ['required', 'numeric']
            ]);
        }
        
        StudentScore::where('score_id', $score)->delete();
        StudentScore::insert($data);

        return redirect()->route('scores.list', ['academic' => $request->academic_year, 'class' => $class, 'semester' => $request->semester])->with('success', 'Data nilai berhasil diubah.');
    }

    public function destroy($score) {
        Score::findOrFail($score)->delete();
        return redirect()->back()->with('success', 'Data nilai berhasil dihapus.');
    }

    public function downloadPDF($academic, $semester, $class, $score) {
        $score_data = Score::where('id', $score)->first();
        $lesson = Lesson::where('id', $score_data->lesson_id)->first();
        $class = Classes::with([
            'majors',
            'levels',
            'grades'
        ])->where('id', $class)->first();
        $index = 1;
        $student_scores = StudentScore::with([
            'students.student_complements',
            'students.user_complements'
        ])->where('score_id', $score)
        ->where('is_active', true)
        ->orderBy('student_id', 'asc')
        ->get();
        
        return view('students.scores.print', [
            'score' => $score_data,
            'scores' => $student_scores,
            'semester' => $semester,
            'lesson' => $lesson,
            'class' => $class,
            'index' => $index
        ]);
    }

    public function printRaporPDF($academic, $class, $student) {
        $student = User::with([
            'user_complements',
            'student_complements'
        ])->where('id', $student)->first();
        $academic_year = AcademicYear::where('id', $academic)->first();
        $student_class = Classes::with([
            'majors',
            'levels',
            'grades'
            ])->where('id', $class)->first();
        $teacher = User::with('user_complements')->where('id', $student_class->teacher_id)->first();
        $scores = Score::with(['student_scores', 'lesson'])->where('academic_year', $academic)->where('class_id', $class)->get();
        $array_scores = [];

        foreach ($scores as $score) {
            foreach ($score->student_scores as $item) {
                if ($item->student_id == $student->id) {
                    array_push($array_scores,  array(
                        'student_id' => $student->id,
                        'lesson_id' => $score->lesson_id,
                        'lesson_title' => $score->lesson->title,
                        'score' => $item->score
                    ));
                }
            }
        }

        function calculateAverageScore($array) {
            $result = [];

            foreach ($array as $item) {
                $lesson_id = $item['lesson_id'];
                $lesson_title = $item['lesson_title'];

                if (!isset($result[$lesson_id])) {
                    $result[$lesson_id] = [
                        'lesson_id' => $lesson_id,
                        'lesson_title' => $lesson_title,
                        'total_score' => 0,
                        'count' => 0
                    ];
                }

                $result[$lesson_id] ['total_score'] += $item['score'];
                $result[$lesson_id] ['count'] += 1;
            }

            foreach ($result as $lesson_id => $data) {
                $result[$lesson_id] ['average_score'] = number_format($data['total_score'] / $data['count'], 2);
                unset($result[$lesson_id] ['total_score'], $result[$lesson_id] ['count']);
            }
            return array_values($result);
        }
        $average_scores = calculateAverageScore($array_scores);

        $total_average_score = 0;
        $count_of_lesson = count($average_scores);

        foreach ($average_scores as $item) {
            $total_average_score += $item['average_score'];
        }

        $final_score = $count_of_lesson > 0 ? number_format($total_average_score / $count_of_lesson, 2) : 0;

        return view('students.scores.print-rapor', [
            'student' => $student,
            'academic' => $academic_year,
            'class' => $student_class,
            'teacher' => $teacher,
            'rapor_scores' => $average_scores,
            'final_score' => $final_score,
            'index' => 1
        ]);
    }
}