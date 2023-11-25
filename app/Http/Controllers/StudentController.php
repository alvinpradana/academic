<?php

namespace App\Http\Controllers;

use App\Models\StudentComplement;
use App\Models\User;
use App\Models\UserComplement;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = User::with([
            'user_complements',
            'student_complements'
        ])->where('position_id', 2)->get();

        $count = User::where('position_id', 2)->sum('id');

        return view('students.home', [
            'students' => $students,
            'count' => $count
        ]);
    }

    public function show($id) {
        $student = User::with([
            'user_complements',
            'student_complements'
        ])->where('id', $id)->first();

        return view('students.show', ['student' => $student]);

    }

    public function create() {
        $last_nip = StudentComplement::pluck('id')->last();
        $nip = date('Y') . sprintf('%04s', $last_nip + 1);
        
        return view('students.create', ['nip' => $nip]);
    }

    public function store(Request $request) {
        User::insert([
            'position_id' => 2,
            'email' => $request->email,
            'password' => $request->nip,
        ]);

        $user_id = User::orderBy('id', 'desc')->pluck('id')->first();
        UserComplement::insert([
            'user_id' => $user_id,
            'name' => $request->name,
            'gender' => $request->gender,
            'id_number' => $request->nik,
            'birth_date_place' => $request->birth,
            'age' => $request->age,
            'religion' => $request->religion,
            'image' => $request->image,
            'phone_number' => $request->phone,
            'street' => $request->street,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'zip_code' => $request->zip
        ]);

        StudentComplement::insert([
            'user_id' => $user_id,
            'nip_number' => $request->nip,
            'school_alumnae' => $request->alumnae,
            'last_report_value' => $request->report
        ]);

        return redirect()->route('students.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit($id) {
        $student = User::with([
            'user_complements',
            'student_complements'
        ])->where('id', $id)->first();

        return view('students.edit', ['student' => $student]);
    }

    public function update(Request $request, $id) {
        User::where('id', $id)->update([
            'email' => $request->email
        ]);

        UserComplement::where('user_id', $id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'id_number' => $request->nik,
            'birth_date_place' => $request->birth,
            'age' => $request->age,
            'religion' => $request->religion,
            'image' => $request->image,
            'phone_number' => $request->phone,
            'street' => $request->street,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'zip_code' => $request->zip
        ]);

        StudentComplement::where('user_id', $id)->update([
            'school_alumnae' => $request->alumnae,
            'last_report_value' => $request->report
        ]);

        return redirect()->route('students.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($id) {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data siswa berhasil dihapus.');
    }
}
