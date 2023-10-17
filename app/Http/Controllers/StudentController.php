<?php

namespace App\Http\Controllers;

use App\Models\StudentComplement;
use App\Models\User;
use App\Models\UserComplement;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index () {
        return view('students.home');
    }

    public function create() {
        return view('students.create');
    }

    public function store(Request $request) {
        User::insert([
            'position_id' => 2,
            'email' => $request->email,
            'password' => $request->nik,
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
            'school_alumnae' => $request->alumnae,
            'last_report_value' => $request->report
        ]);

        return redirect()->route('students.index');
    }
}
