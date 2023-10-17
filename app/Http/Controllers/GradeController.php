<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index () {
        $grades = Grade::orderBy('id', 'asc')->get();
        $count = Grade::sum('id');
        
        return view('class.grade.home', [
            'grades' => $grades,
            'count' => $count
        ]);
    }

    public function create() {
        return view('class.grade.create');
    }

    public function store(Request $request) {
        Grade::insert([
            'title' => $request->title,
            'notes' => $request->notes
        ]);
        return redirect()->route('grades.index');
    }

    public function edit($id) {
        $grade = Grade::find($id);
        return view('class.grade.edit', ['grade' => $grade]);
    }

    public function update(Request $request, $id) {
        Grade::where('id', $id)->update([
            'title' => $request->title,
            'notes' => $request->notes
        ]);
        return redirect()->route('grades.index');
    }

    public function destroy($id) {
        Grade::find($id)->delete();
        return back();
    }
}
