<?php

namespace App\Http\Controllers;

use App\Models\LevelClass;
use Illuminate\Http\Request;

class ClassLevelController extends Controller
{
    public function index() {
        $levels = LevelClass::orderBy('level', 'asc')->get();
        $count = LevelClass::sum('id');

        return view('class.level.home', [
            'levels' => $levels,
            'count' => $count
        ]);
    }

    public function show($id) {
        $class = LevelClass::findOrFail($id);
        
        return view('class.level.show', ['class' => $class]);
    }

    public function create() {
        return view('class.level.create');
    }

    public function store(Request $request) {
        $request->validate([
            'level' => ['required', 'numeric']
        ]);
        
        LevelClass::insert([
            'level' => $request->level,
            'notes' => $request->notes
        ]);
        return redirect()->route('class-level.index')->with('success', 'Data level kelas berhasil ditambahkan.');
    }

    public function edit($id) {
        $level = LevelClass::find($id);
        return view('class.level.edit', ['level' => $level]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'level' => ['required', 'numeric']
        ]);
        
        LevelClass::where('id', $id)->update([
            'level' => $request->level,
            'notes' => $request->notes
        ]);
        return redirect()->route('class-level.index')->with('success', 'Data level kelas berhasil diperbarui.');
    }

    public function destroy($id) {
        LevelClass::find($id)->delete();
        return redirect()->back()->with('success', 'Data level kelas berhasil dihapus.');
    }
}
