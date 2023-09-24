<?php

namespace App\Http\Controllers;

use App\Models\LevelClass;
use Illuminate\Http\Request;

class ClassLevelController extends Controller
{
    public function index() {
        $levels = LevelClass::orderBy('level', 'asc')->get();
        return view('class.level.home', ['levels' => $levels]);
    }

    public function create() {
        return view('class.level.create');
    }

    public function store(Request $request) {
        LevelClass::insert([
            'level' => $request->level,
            'notes' => $request->notes
        ]);
        return redirect()->route('class-level.index');
    }

    public function edit($id) {
        $level = LevelClass::find($id);
        return view('class.level.edit', ['level' => $level]);
    }

    public function update(Request $request, $id) {
        LevelClass::where('id', $id)->update([
            'level' => $request->level,
            'notes' => $request->notes
        ]);
        return redirect()->route('class-level.index');
    }

    public function destroy($id) {
        LevelClass::find($id)->delete();
        return redirect()->back();
    }
}
