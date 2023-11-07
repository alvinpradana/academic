<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\ClassGroup;
use App\Models\User;
use Illuminate\Http\Request;

class ClassGroupController extends Controller
{
    public function index() {
        $class = Classes::with([
            'majors',
            'levels',
            'grades'
        ])->orderBy('id', 'asc')->get();

        $count = $class->sum('id');

        return view('class.group.home', ['class' => $class, 'count' => $count]);
    }

    public function show($id) {

        $class = Classes::with([
            'levels',
            'grades',
            'majors'
        ])->find($id);

        $students = ClassGroup::where('class_id', $id)->with('users.user_complements')->get();
        $count = $students->sum('id');

        $current_class = '';

        if ($class != null) {
            $class_level = $class->levels->level;
            $class_grade = $class->grades->title;
            $class_major = $class->majors->title;

            $current_class = $class_level . ' ' . $class_major . ' ' . $class_grade;
        }

        return view('class.group.show', [
            'count' => $count,
            'students' => $students,
            'class' => $current_class,
            'class_id' => $class->id
        ]);
    }

    public function create($class_id) {
        $class = Classes::with([
            'levels',
            'grades',
            'majors'
        ])->find($class_id);

        $current_class = $class->levels->level . ' ' . $class->majors->title . ' ' . $class->grades->title;

        return view('class.group.create', [
            'class_id'=> $class_id,
            'class' => $current_class
        ]);
    }

    public function store(Request $request) {
        $student = User::where('password', $request->nip)->first();

        $possible_to_insert = false;
        $alert_message = '';
        $student_not_found = 'Siswa tidak ditemukan.';
        $student_has_added = 'Siswa sudah berada di kelas lain.';
        $success_added = 'Siswa berhasil ditambahkan.';

        $return_alert = '';

        $student_in_class = ClassGroup::where('student_id', $student->id)->first();

        if (($student_in_class == null) && ($student->position_id == 2)) {
            $possible_to_insert = true;
        }

        if ($possible_to_insert) {
            ClassGroup::insert([
                'student_id' => $student->id,
                'class_id' => $request->class_id
            ]);

            $return_alert = 'success';
            $alert_message = $success_added;
        } else {
            $return_alert = 'warning';
            if ($student_in_class != null) {
                $alert_message = $student_not_found;
            } elseif ($student->position_id > 2) {
                $alert_message = $student_not_found;
            }
        }

        return redirect()->route('class-group.show', ['class_group' => $request->class_id])->with($return_alert, $alert_message);
    }
}
