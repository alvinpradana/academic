<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\TeacherComplement;
use App\Models\User;
use App\Models\UserComplement;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index () {
        $users = User::with([
            'user_complements',
            'teacher_complements',
            'positions'
        ])->where('position_id', 1)->orderBy('id', 'desc')->get();

        $count = User::where('position_id', '=', 1)->sum('id');

        return view('teachers.home', [
            'users' => $users,
            'count' => $count
        ]);
    }

    public function create() {
        $positions = Position::orderBy('id', 'asc')->get();

        return view('teachers.create', ['positions' => $positions]);
    }

    public function store(Request $request) {
        User::insert([
            'position_id' => 1,
            'email' => $request->email,
            'password' => $request->nip,
        ]);

        $user_id = User::orderBy('id', 'desc')->pluck('id')->first();
        UserComplement::insert([
            'user_id' => $user_id,
            'name' => $request->name,
            'gender' => $request->gender,
            'id_number' => $request->nik,
            'birth_date_place' => $request->birth_date_place,
            'age' => $request->age,
            'religion' => $request->religion,
            'image' => $request->image,
            'phone_number' => $request->phone,
            'street' => $request->street,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'zip_code' => $request->zip
        ]);

        TeacherComplement::insert([
            'user_id' => $user_id,
            'nip_number' => $request->nip,
        ]);

        return redirect()->route('teachers.index');
    }

    public function edit($id) {
        $user = User::find($id);
        $positions = Position::orderBy('id', 'desc')->get();

        return view('teachers.edit', [
            'user' => $user,
            'positions' => $positions
        ]);
    }

    public function update(Request $request, $id) {
        User::where('id', $id)->update([
            'email' => $request->email,
            'password' => $request->nip
        ]);

        UserComplement::where('user_id', $id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'id_number' => $request->nik,
            'birth_date_place' => $request->birth_date_place,
            'age' => $request->age,
            'religion' => $request->religion,
            'image' => $request->image,
            'phone_number' => $request->phone,
            'street' => $request->street,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
            'zip_code' => $request->zip
        ]);

        TeacherComplement::where('user_id', $id)->update([
            'nip_number' => $request->nip,
        ]);

        return redirect()->route('teachers.index');
    }

    public function destroy($id) {
        User::find($id)->delete();
        return back();
    }
}
