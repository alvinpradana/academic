<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\User;
use App\Models\UserComplement;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index () {
        $users = User::with(['user_complements', 'user_complements.user_positions'])->orderBy('id', 'desc')->get();
        return view('teachers.home', ['users' => $users]);
        // foreach ($users as $user) {
        //     dd($user->user_complements);
        // }
        // dd($users);
    }

    public function create() {
        $positions = Position::orderBy('id', 'desc')->get();

        return view('teachers.create', ['positions' => $positions]);
    }

    public function store(Request $request) {        
        User::insert([
            'email' => $request->email,
            'password' => $request->nip
        ]);
        $user_id = User::orderBy('id', 'desc')->pluck('id')->first();

        UserComplement::insert([
            'user_id' => $user_id,
            'user_position_id' => $request->position,
            'name' => $request->name,
            'nip_number' => $request->nip,
            'gender' => $request->gender,
            'birth_date_place' => $request->birth_date_place,
            'age' => $request->age,
            'religion' => $request->religion,
            'image' => $request->image,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'subdistrict' => $request->subdistrict,
            'regency' => $request->regency,
            'zip_code' => $request->zip_code
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
            'user_id' => $id,
            'user_position_id' => $request->position,
            'name' => $request->name,
            'nip_number' => $request->nip,
            'gender' => $request->gender,
            'birth_date_place' => $request->birth_date_place,
            'age' => $request->age,
            'religion' => $request->religion,
            'image' => $request->image,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'subdistrict' => $request->subdistrict,
            'regency' => $request->regency,
            'zip_code' => $request->zip_code
        ]);
        return redirect()->route('teachers.index');
    }

    public function destroy($id) {
        User::find($id)->delete();
        return back();
    }
}
