<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index() {
        $semesters = Semester::orderBy('id', 'asc')->get();
        $count = Semester::sum('id');

        return view('semesters.home', [
            'semesters' => $semesters,
            'count' => $count
        ]);
    }

    public function show($id) {
        $semester = Semester::findOrFail($id);

        return view('semesters.show', ['semester' => $semester]);
    }

    public function create() {
        return view('semesters.create');
    }

    public function store(Request $request) {
        Semester::insert([
            'title' => $request->title,
            'notes' => $request->notes
        ]);

        return redirect()->route('semesters.index')->with('success', 'Data semester berhasil disimpan.');
    }

    public function edit($id) {
        $semester = Semester::findOrFail($id);
        return view('semesters.edit', compact('semester'));
    }

    public function update(Request $request, $id) {
        Semester::where('id', $id)->update([
            'title' => $request->title,
            'notes' => $request->notes
        ]);

        return redirect()->route('semesters.index')->with('success', 'Data semester berhasil diubah.');
    }

    public function destroy($id) {
        Semester::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data semester berhasil dihapus.');
    }
}
