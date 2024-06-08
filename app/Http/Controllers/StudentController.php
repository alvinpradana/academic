<?php

namespace App\Http\Controllers;

use App\Models\ParentContact;
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
        ])->where('position_id', 2)->paginate(10);

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
        $request->validate([
            'email' => ['required', 'email', 'unique:users'],
            'name' => ['required'],
            'birth' => ['required'],
            'gender' => ['required'],
            'nik' => ['required'],
            'age' => ['required'],
            'phone' => ['required'],
            'religion' => ['required'],
            'alumnae' => ['required'],
            'street' => ['required'],
            'father-name' => ['required'],
            'mother-name' => ['required'],
            'father-id-number' => ['required'],
            'mother-id-number' => ['required'],
            'father-phone' => ['required'],
            'mother-phone' => ['required'],
        ]);
        
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

        ParentContact::insert([
            'user_id' => $user_id,
            'father_name' => $request->input('father-name'),
            'mother_name' => $request->input('mother-name'),
            'father_id_number' => $request->input('father-id-number'),
            'mother_id_number' => $request->input('mother-id-number'),
            'father_phone_number' => $request->input('father-phone'),
            'mother_phone_number' => $request->input('mother-phone'),
            'father_work' => $request->input('father-work'),
            'mother_work' => $request->input('mother-work'),
        ]);

        return redirect()->route('students.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit($id) {
        $student = User::with([
            'user_complements',
            'student_complements',
            'parents'
        ])->where('id', $id)->first();

        return view('students.edit', ['student' => $student]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'email' => ['required', 'email', 'unique:users,email,'. $id],
            'name' => ['required'],
            'birth' => ['required'],
            'gender' => ['required'],
            'nik' => ['required'],
            'age' => ['required'],
            'phone' => ['required'],
            'religion' => ['required'],
            'alumnae' => ['required'],
            'street' => ['required'],
            'father-name' => ['required'],
            'mother-name' => ['required'],
            'father-id-number' => ['required'],
            'mother-id-number' => ['required'],
            'father-phone' => ['required'],
            'mother-phone' => ['required'],
        ]);
        
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

        ParentContact::where('user_id', $id)->update([
            'father_name' => $request->input('father-name'),
            'mother_name' => $request->input('mother-name'),
            'father_id_number' => $request->input('father-id-number'),
            'mother_id_number' => $request->input('mother-id-number'),
            'father_phone_number' => $request->input('father-phone'),
            'mother_phone_number' => $request->input('mother-phone'),
            'father_work' => $request->input('father-work'),
            'mother_work' => $request->input('mother-work'),
        ]);

        return redirect()->route('students.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($id) {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data siswa berhasil dihapus.');
    }
}
