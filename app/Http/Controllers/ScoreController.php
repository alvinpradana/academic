<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\ClassGroup;
use App\Models\Lesson;
use App\Models\Score;
use App\Models\Semester;
use App\Models\StudentScore;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
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

    public function list($class) {
        $count = Score::where('class_id', $class)->count('id');
        $scores = Score::with('lesson')->where('class_id', $class)->orderBy('id', 'desc')->get();

        return view('students.scores.list', [
            'scores' => $scores,
            'class' => $class,
            'count' => $count
        ]);
    }

    public function view($class, $score) {
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

    public function add($class) {
        $students = ClassGroup::where('class_id', $class)->with('users.user_complements')->get();
        $semesters = Semester::orderBy('id', 'asc')->get();
        $lessons = Lesson::orderBy('id', 'asc')->get();
        $count = $students->count();
        
        return view('students.scores.create', [
            'semesters' => $semesters,
            'lessons' => $lessons,
            'students' => $students,
            'count' => $count,
            'class' => $class
        ]);
    }

    public function store(Request $request) {
        $data = [];
        $index = $request->count;
        
        Score::insert([
            'semester_id' => $request->semester,
            'class_id' => $request->class,
            'lesson_id' => $request->lesson,
            'task_name' => $request->task,
            'teacher_name' => $request->teacher,
            'created' => date('Y-m-d')
        ]);

        foreach ($request->student as $key) {
            $index--;
            array_push($data, [
                'score_id' => Score::pluck('id')->last(),
                'student_id' => $request->student[$index],
                'score' => $request->score[$index],
                'notes' => $request->notes[$index],
            ]);
        }

        StudentScore::insert($data);
        return redirect()->route('scores.list', $request->class);
    }

    public function edit($class, $id) {
        $students = ClassGroup::where('class_id', $class)->with('users.user_complements')->get();
        $semesters = Semester::orderBy('id', 'asc')->get();
        $lessons = Lesson::orderBy('id', 'asc')->get();
        $scores = Score::where('id', $id)->first();
        $student_scores = StudentScore::with([
            'scores',
            'students.student_complements',
            'students.user_complements'
        ])->where('score_id', $id)->orderBy('student_id', 'asc')->get();

        return view('students.scores.edit', [
            'student_scores' => $student_scores,
            'scores' => $scores,
            'semesters' => $semesters,
            'class' => $class,
            'score' => $id,
            'lessons' => $lessons,
            'students' => $students
        ]);
    }

    public function update(Request $request, $class, $score) {
        $data = [];
        $index = $request->count;

        Score::where('id', $score)->update([
            'semester_id' => $request->semester,
            'class_id' => $request->class,
            'lesson_id' => $request->lesson,
            'task_name' => $request->task,
            'teacher_name' => $request->teacher
        ]);

        foreach ($request->student as $key) {
            $index--;
            array_push($data, [
                'score_id' => Score::pluck('id')->last(),
                'student_id' => $request->student[$index],
                'score' => $request->score[$index],
                'notes' => $request->notes[$index],
            ]);
        }

        StudentScore::where('score_id', $score)->delete();
        StudentScore::insert($data);

        return redirect()->route('scores.list', ['class' => $class]);
    }

    public function destroy($score) {
        Score::findOrFail($score)->delete();
        return redirect()->back();
    }
}
