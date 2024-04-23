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
            'levels',
            'grades',
            'users'
        ])->orderBy('id', 'desc')->get();

        $count = Classes::sum('id');
        
        return view('class.home', [
            'classes' => $classes,
            'count' => $count,
        ]);
    }

    public function show($id) {
        $class = Classes::findOrFail($id);

        return view('class.show', [
            'class' => $class
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
        $request->validate([
            'teacher' => ['required'],
            'level' => ['required'],
            'major' => ['required'],
            'grade' => ['required']
        ]);
        
        Classes::insert([
            'teacher_id' => $request->teacher,
            'class_level_id' => $request->level,
            'class_major_id' => $request->major,
            'class_grade_id' => $request->grade,
            'notes' => $request->notes
        ]);
        return redirect()->route('class.index')->with('success', 'Data kelas berhasil ditambahkan.');
    }

    public function edit($id) {
        $class = Classes::findOrFail($id);
        $levels = LevelClass::orderBy('level', 'asc')->get();
        $majors = Major::orderBy('id', 'desc')->get();
        $grades = Grade::orderBy('title', 'asc')->get();
        $teachers = User::with([
            'user_complements'
        ])->where('position_id', 1)->orderBy('id', 'desc')->get();

        return view('class.edit', [
            'class' => $class,
            'levels' => $levels,
            'grades' => $grades,
            'majors' => $majors,
            'teachers' => $teachers
        ]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'teacher' => ['required'],
            'level' => ['required'],
            'major' => ['required'],
            'grade' => ['required']
        ]);
        
        Classes::where('id', $id)->update([
            'teacher_id' => $request->teacher,
            'class_level_id' => $request->level,
            'class_major_id' => $request->major,
            'class_grade_id' => $request->grade,
            'notes' => $request->notes
        ]);

        return redirect()->route('class.index')->with('success', 'Data kelas berhasil diperbarui.');
    }

    public function destroy($id) {
        Classes::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data kels berhasil dihapus.');
    }
}
