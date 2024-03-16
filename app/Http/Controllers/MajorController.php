<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index() {
        $majors = Major::orderBy('id', 'desc')->get();
        $count = Major::sum('id');
        
        return view('majors.home', [
            'majors' => $majors,
            'count' => $count
        ]);
    }
    
    public function show($id) {
        $major = Major::findOrFail($id);

        return view('majors.show', ['major' => $major]);
    }
    
    public function create() {
        return view('majors.create');
    }

    public function store(Request $request) {
        Major::insert([
            'title' => $request->title,
            'notes' => $request->notes
        ]);
        return redirect()->route('majors.index')->with('success', 'Data jurusan berhasil ditambahkan.');
    }

    public function edit($id) {
        $major = Major::find($id);
        return view('majors.edit', ['major' => $major]);
    }

    public function update(Request $request, $id) {
        Major::where('id', $id)->update([
            'title' => $request->title,
            'notes' => $request->notes
        ]);
        return redirect()->route('majors.index')->with('success', 'Data jurusan berhasil diperbarui.');
    }

    public function destroy($id) {
        Major::find($id)->delete();
        return redirect()->back()->with('success', 'Data jurusan berhasil dihapus.');
    }
}
