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
        return view('students.scores.list', compact('class'));
    }

    public function task() {
        return view('students.scores.task');
    }

    public function view($class, $id) {
        return view('students.scores.view');
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
