<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\ClassGroup;
use App\Models\StudentComplement;
use App\Models\StudentScore;
use Illuminate\Http\Request;

class ChangeClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index($id)
    {
        $class = Classes::with([
            'levels',
            'grades',
            'majors'
        ])->find($id);

        $students = ClassGroup::where('class_id', $id)->where('is_active', true)->with('users.user_complements')->orderBy('created_at', 'desc')->get();
        $count = $students->sum('id');

        $current_class = '';

        if ($class != null) {
            $class_level = $class->levels->level;
            $class_grade = $class->grades->title;
            $class_major = $class->majors->title;

            $current_class = $class_level . ' ' . $class_major . ' ' . $class_grade;
        }

        $all_class = Classes::with([
            'majors',
            'levels',
            'grades'
        ])->orderBy('id', 'asc')->get();

        return view('class.change.index', [
            'count' => $count,
            'students' => $students,
            'class' => $current_class,
            'class_id' => $class->id,
            'all_class' => $all_class
        ]);
    }

    public function update(Request $request)
    {
        $data = [];
        $index = count($request->student);

        foreach ($request->student as $key) {
            $index--;
            if ($request->input('class_' . $index) == 0) {
                StudentComplement::where('user_id', $request->student[$index])->update(['is_active' => false]);
                ClassGroup::where('student_id', $request->student[$index])->update(['is_active' => false]);
                StudentScore::where('student_id', $request->student[$index])->update(['is_active' => false]);
            } else {
                array_push($data, [
                    'student' => $request->student[$index],
                    'class' => $request->input('class_' . $index)
                ]);
                ClassGroup::where('student_id', $request->student[$index])->update(['class_id' => $request->input('class_' . $index)]);
            }
        }

        return redirect()->back()->with('success', 'Data kelas berhasil diubah.');
    }
}
