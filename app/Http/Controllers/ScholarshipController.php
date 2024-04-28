<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function index() {
        $scholarships = Scholarship::orderBy('id', 'desc')->get();
        $count = Scholarship::sum('id');

        return view('scholarships.home', [
            'scholarships' => $scholarships,
            'count' => $count
        ]);
    }

    public function show($id) {
        $scholarship = Scholarship::findOrFail($id);
        
        return view('scholarships.show', ['scholarship' => $scholarship]);
    }

    public function create() {
        return view('scholarships.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => ['required']
        ]);
        
        Scholarship::insert([
            'title' => $request->title,
            'notes' => $request->notes
        ]);

        return redirect()->route('scholarships.index')->with('success', 'Data beasiswa berhasil disimpan.');
    }

    public function edit($id) {
        $scholarship = Scholarship::find($id);
        return view('scholarships.edit', ['scholarship' => $scholarship]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'title' => ['required']
        ]);
        
        Scholarship::where('id', $id)->update([
            'title' => $request->title,
            'notes' => $request->notes
        ]);

        return redirect()->route('scholarships.index')->with('success', 'Data beasiswa berhasil diperbarui.');
    }

    public function destroy($id) {
        Scholarship::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Data beasiswa berhasil dihapus.');
    }
}
