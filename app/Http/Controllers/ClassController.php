<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Grade;
use App\Models\LevelClass;
use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index() {
        $classes = Classes::with([
            'majors',
            'class_levels',
            'grades',
            'users'
        ])->orderBy('id', 'desc')->get();

        $count = Classes::sum('id');
        
        return view('class.home', [
            'classes' => $classes,
            'count' => $count,
        ]);
    }
    
    public function create() {
        $levels = LevelClass::orderBy('level', 'asc')->get();
        $majors = Major::orderBy('id', 'desc')->get();
        $grades = Grade::orderBy('title', 'asc')->get();
        $teachers = User::with([
            'user_complements'
        ])->where('position_id', 1)->orderBy('id', 'desc')->get();

        return view('class.create', [
            'levels' => $levels,
            'grades' => $grades,
            'majors' => $majors,
            'teachers' => $teachers
        ]);
    }

    public function store(Request $request) {
        Classes::insert([
            'teacher_id' => $request->teacher,
            'class_level_id' => $request->level,
            'class_major_id' => $request->major,
            'class_grade_id' => $request->grade,
            'notes' => $request->notes
        ]);
        return redirect()->route('class.index');
    }

    public function edit() {
        
    }
}
