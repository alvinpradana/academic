<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index() {
        $lessons = Lesson::orderBy('id', 'desc')->paginate(5);
        $count = Lesson::sum('id');

        return view('lessons.home', [
            'lessons' => $lessons,
            'count' => $count
        ]);
    }

    public function show($id) {
        $lesson = Lesson::findOrFail($id);
        return view('lessons.show', compact('lesson'));
    }

    public function create() {
        return view('lessons.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => ['required']
        ]);
        
        Lesson::insert([
            'title' => $request->title,
            'notes' => $request->notes
        ]);

        return redirect()->route('lessons.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id) {
        $lesson = Lesson::findOrFail($id);
        return view('lessons.edit', compact('lesson'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'title' => ['required']
        ]);
        
        Lesson::where('id', $id)->update([
            'title' => $request->title,
            'notes' => $request->notes
        ]);

        return redirect()->route('lessons.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id) {
        Lesson::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
