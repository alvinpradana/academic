<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\ClassGroup;
use App\Models\Lesson;
use App\Models\Score;
use App\Models\Semester;
use App\Models\StudentScore;
use App\Models\User;
use App\Models\UserComplement;
use Auth;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function __construct() {
        $this->middleware('teacher')->except(['index', 'list', 'view', 'semesters']);
    }
    
    public function index() {
        $class = Classes::with([
            'majors',
            'levels',
            'grades'
        ])->orderBy('id', 'asc')->get();

        $count = $class->sum('id');

        return view('students.scores.index', [
            'class' => $class,
            'count' => $count
        ]);
    }

    public function semesters($class) {
        $semesters = Semester::orderBy('id', 'asc')->get();
        $count = count($semesters);

        return view('students.scores.semesters', [
            'semesters' => $semesters,
            'count' => $count,
            'class' => $class
        ]);
    }

    public function list($class, $semester) {
        $count = Score::where('class_id', $class)->where('semester_id', $semester)->count('id');
        $scores = Score::with('lesson')->where('class_id', $class,)->where('semester_id', $semester)->orderBy('id', 'desc')->paginate(5);

        return view('students.scores.list', [
            'scores' => $scores,
            'class' => $class,
            'semester' => $semester,
            'count' => $count
        ]);
    }

    public function view($class, $semester, $score) {
        $student_scores = StudentScore::with([
            'scores',
            'students.student_complements',
            'students.user_complements'
        ])->where('score_id', $score)->orderBy('student_id', 'asc')->get();
        
        return view('students.scores.view', [
            'student_scores' => $student_scores,
            'class' => $class,
            'score_id' => $score
        ]);
    }

    public function add($class, $semester) {
        $students = ClassGroup::where('class_id', $class)->with('users.user_complements')->get();
        $semesters = Semester::orderBy('id', 'asc')->get();
        $lessons = Lesson::orderBy('id', 'asc')->get();
        $teacher = UserComplement::where('user_id', Auth::user()->id)->first();
        $count = $students->count();
        
        return view('students.scores.create', [
            'semesters' => $semesters,
            'semester' => $semester,
            'lessons' => $lessons,
            'students' => $students,
            'count' => $count,
            'class' => $class,
            'teacher' =>$teacher
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
        return redirect()->route('scores.list', [$request->class, $request->semester])->with('success', 'Data nilai berhasil disimpan.');
    }

    public function edit($class, $semester, $score) {
        $students = ClassGroup::where('class_id', $class)->with('users.user_complements')->get();
        $semesters = Semester::orderBy('id', 'asc')->get();
        $lessons = Lesson::orderBy('id', 'asc')->get();
        $scores = Score::where('id', $score)->first();
        $student_scores = StudentScore::with([
            'scores',
            'students.student_complements',
            'students.user_complements'
        ])->where('score_id', $score)->orderBy('student_id', 'asc')->get();

        return view('students.scores.edit', [
            'student_scores' => $student_scores,
            'scores' => $scores,
            'semesters' => $semesters,
            'semester' => $semester,
            'class' => $class,
            'score' => $score,
            'lessons' => $lessons,
            'students' => $students
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

        return redirect()->route('scores.list', ['class' => $class, 'semester' => $request->semester])->with('success', 'Data nilai berhasil diubah.');
    }

    public function destroy($score) {
        Score::findOrFail($score)->delete();
        return redirect()->back()->with('success', 'Data nilai berhasil dihapus.');
    }
}
