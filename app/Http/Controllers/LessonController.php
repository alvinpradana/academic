<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index() {
        $lessons = Lesson::orderBy('id', 'desc')->get();
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
        Lesson::insert([
            'title' => $request->title,
            'notes' => $request->notes
        ]);

        return redirect()->route('lessons.index');
    }

    public function edit($id) {
        $lesson = Lesson::findOrFail($id);
        return view('lessons.edit', compact('lesson'));
    }

    public function update(Request $request, $id) {
        Lesson::where('id', $id)->update([
            'title' => $request->title,
            'notes' => $request->notes
        ]);

        return redirect()->route('lessons.index');
    }

    public function destroy($id) {
        Lesson::findOrFail($id)->delete();
        return redirect()->back();
    }
}
