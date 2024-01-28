<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\ClassGroup;
use App\Models\Lesson;
use App\Models\Semester;
use App\Models\User;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    public function index() {
        $class = Classes::with([
            'majors',
            'levels',
            'grades'
        ])->orderBy('id', 'asc')->get();

        $count = $class->sum('id');

        return view('presences.home', [
            'class' => $class,
            'count' => $count
        ]);
    }

    public function semesters() {
        $semesters = Semester::orderBy('id', 'asc')->get();
        $count = $semesters->sum('id');
        
        return view('presences.semester', [
            'semesters' => $semesters,
            'count' => $count
        ]);
    }
    
    public function show(Classes $classes, Semester $semester, Lesson $lesson) {

    }

    public function create($class) {
        $students = ClassGroup::where('class_id', $class)->with('users.user_complements')->get();
        $semesters = Semester::orderBy('id', 'asc')->get();
        $lessons = Lesson::orderBy('id', 'asc')->get();

        return view('presences.create', [
            'students' => $students,
            'semesters' => $semesters,
            'lessons' => $lessons
        ]);
    }

    public function store() {

    }
}
