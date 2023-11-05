<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\ClassGroup;
use App\Models\User;
use Illuminate\Http\Request;

class ClassGroupController extends Controller
{
    public function index() {
        $class = Classes::with([
            'majors',
            'class_levels',
            'grades'
        ])->orderBy('id', 'asc')->get();

        return view('class.group.home', ['class' => $class]);
    }

    public function show($id) {
        $class_group = ClassGroup::with([
            'class.class_levels',
            'class.grades',
            'class.majors'
        ])->find($id);

        $students = ClassGroup::where('class_id', $id)->with('users.user_complements')->get();
        $count = $students->sum('id');

        $class_level = $class_group->class->class_levels->level;
        $class_grade = $class_group->class->grades->title;
        $class_major = $class_group->class->majors->title;

        $current_class = $class_level . ' ' . $class_major . ' ' . $class_grade;

        return view('class.group.show', [
            'count' => $count,
            'students' => $students,
            'class' => $current_class
        ]);
    }

    public function create() {
        return view('class.group.create');
    }
}
