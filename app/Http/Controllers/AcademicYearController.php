<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\AcceptHeader;

class AcademicYearController extends Controller
{
    public function index () {
        $academics = AcademicYear::orderBy('id', 'desc')->get();
        $count = AcademicYear::count('id');
        
        return view('academic-year.home', [
            'academics' => $academics,
            'count' => $count
        ]);
    }

    public function show ($id) {
        $academic = AcademicYear::where('id', $id)->first();
        
        return view('academic-year.show', [
            'academic' => $academic
        ]);
    }

    public function create () {
        return view('academic-year.create');
    }

    public function store (Request $request) {
        $request->validate([
            'title' => ['required']
        ]);
        
        AcademicYear::insert([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('academic-year.index')->with('success', 'Data tahun ajaran berhasil ditambahkan.');
    }

    public function edit ($id) {
        $academic = AcademicYear::findOrFail($id);
        
        return view('academic-year.edit', [
            'academic' => $academic
        ]);
    }

    public function update (Request $request, $id) {
        $request->validate([
            'title' => ['required']
        ]);

        AcademicYear::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('academic-year.index')->with('success', 'Data tahun ajaran berhasil diubah.');
    }

    public function destroy ($id) {
        AcademicYear::findOrFail($id)->delete();
        return redirect()->route('academic-year.index')->with('success', 'Data tahun ajaran berhasil dihapus.');
    }
}
