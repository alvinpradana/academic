<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index() {
        $positions = Position::orderBy('id', 'desc')->paginate(5);
        $count = Position::sum('id');

        return view('positions.home', [
            'positions' => $positions,
            'count' => $count
        ]);
    }

    public function show($id) {
        $position = Position::find($id);

        return view('positions.show', [
            'position' => $position
        ]);
    }

    public function create() {
        return view('positions.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => ['required', 'alpha']
        ]);
        
        Position::insert([
            'title' => $request->title,
            'notes' => $request->notes
        ]);
        return redirect()->route('positions.index')->with('success', 'Data jabatan berhasil ditambahkan.');
    }

    public function edit($id) {
        $position = Position::find($id);
        return view('positions.edit', ['position' => $position]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'title' => ['required', 'alpha']
        ]);
        
        Position::where('id', $id)->update([
            'title' => $request->title,
            'notes' => $request->notes
        ]);
        return redirect()->route('positions.index')->with('success', 'Data jabatan berhasil diperbarui.');
    }

    public function destroy($id) {
        Position::find($id)->delete();

        return redirect()->back()->with('success', 'Data jabatan berhasil dihapus.');
    }
}
