<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index() {
        $majors = Major::orderBy('id', 'desc')->get();
        return view('majors.home', ['majors' => $majors]);
    }
    
    public function create() {
        return view('majors.create');
    }

    public function store(Request $request) {
        Major::insert([
            'title' => $request->title,
            'notes' => $request->notes
        ]);
        return redirect()->route('majors.index');
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
        return redirect()->route('majors.index');
    }

    public function destroy($id) {
        Major::find($id)->delete();
        return redirect()->back();
    }
}
