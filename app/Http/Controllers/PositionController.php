<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index() {
        $positions = Position::orderBy('id', 'desc')->get();
        return view('positions.home', ['positions' => $positions]);
    }

    public function create() {
        return view('positions.create');
    }

    public function store(Request $request) {
        Position::insert([
            'title' => $request->title,
            'notes' => $request->notes
        ]);
        return redirect()->route('positions.index');
    }

    public function edit($id) {
        $position = Position::find($id);
        return view('positions.edit', ['position' => $position]);
    }

    public function update(Request $request, $id) {
        Position::where('id', $id)->update([
            'title' => $request->title,
            'notes' => $request->notes
        ]);
        return redirect()->route('positions.index');
    }

    public function destroy($id) {
        Position::find($id)->delete();
        return redirect()->back();
    }
}
