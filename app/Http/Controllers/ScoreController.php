<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\ClassGroup;
use App\Models\Lesson;
use App\Models\Score;
use App\Models\Semester;
use App\Models\StudentScore;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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
        $scores = Score::with('lesson')->where('class_id', $class)->orderBy('id', 'desc')->get();

        return view('students.scores.list', [
            'scores' => $scores,
            'class' => $class
        ]);
    }

    public function view($class, $score) {
        $student_scores = StudentScore::with([
            'scores',
            'students.student_complements',
            'students.user_complements'
        ])->where('score_id', $score)->orderBy('student_id', 'asc')->get();

        return view('students.scores.view', [
            'student_scores' => $student_scores
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
            'count' => $count
        ]);
    }

    public function store(Request $request) {
        $data = [];
        $index = $request->count;
        
        Score::insert([
            'class_id' => 1,
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
        return redirect()->route('scores.index');
    }
}
