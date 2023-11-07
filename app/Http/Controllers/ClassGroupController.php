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
            'levels',
            'grades'
        ])->orderBy('id', 'asc')->get();

        $count = $class->sum('id');

        return view('class.group.home', ['class' => $class, 'count' => $count]);
    }

    public function show($id) {

        $class = Classes::with([
            'levels',
            'grades',
            'majors'
        ])->find($id);

        $students = ClassGroup::where('class_id', $id)->with('users.user_complements')->get();
        $count = $students->sum('id');

        $current_class = '';

        if ($class != null) {
            $class_level = $class->levels->level;
            $class_grade = $class->grades->title;
            $class_major = $class->majors->title;

            $current_class = $class_level . ' ' . $class_major . ' ' . $class_grade;
        }

        return view('class.group.show', [
            'count' => $count,
            'students' => $students,
            'class' => $current_class,
            'class_id' => $class->id
        ]);
    }

    public function create($class_id) {
        $class = Classes::with([
            'levels',
            'grades',
            'majors'
        ])->find($class_id);

        $current_class = $class->levels->level . ' ' . $class->majors->title . ' ' . $class->grades->title;

        return view('class.group.create', [
            'class_id'=> $class_id,
            'class' => $current_class
        ]);
    }

    public function store(Request $request) {
        $student = User::where('password', $request->nip)->first();
        $class = Classes::where('id', $request->class)->first();

        ClassGroup::insert([
            'student_id' => $student->id,
            'class_id' => $class->class
        ]);

        return redirect()->back();
    }
}
