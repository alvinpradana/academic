<?php

namespace App\Http\Controllers;

use App\Models\EmpployeeComplement;
use App\Models\FamilyContact;
use App\Models\Position;
use App\Models\User;
use App\Models\UserComplement;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct() {
        $this->middleware('admin')->except('index');
    }
    
    public function index() {
        $employees = User::with([
            'user_complements',
            'positions'
        ])->where('position_id', '<>', 1)->where('position_id', '<>', 2)->where('position_id', '<>', 3)->orderBy('id', 'desc')->paginate(10);

        $count = User::where('position_id', '<>', 1)->where('position_id', '<>', 2)->where('position_id', '<>', 3)->sum('id');

        return view('employees.home', [
            'employees' => $employees,
            'count'=> $count
        ]);
    }

    public function show($id) {
        $employee = User::with([
            'user_complements',
            'positions'
        ])->where('id', $id)->first();

        return view('employees.show', compact('employee'));
    }

    public function create() {
        $positions = Position::where('id', '<>', 1)->where('id', '<>', 2)->where('id', '<>', 3)->orderBy('title', 'asc')->get();
        
        return view('employees.create', compact('positions'));
    }

    public function store (Request $request) {
        $request->validate([
            'full-name' => ['required', 'alpha'],
            'birth-date-place' => ['required'],
            'age' => ['required', 'numeric'],
            'email' => ['required','email', 'unique:users'],
            'gender' => ['required'],
            'religion' => ['required'],
            'marital-status' => ['required'],
            'position' => ['required'],
            'id-number' => ['required', 'numeric'],
            'phone-number' => ['required', 'numeric'],
            'address-street' => ['required'],
            'family-name' => ['required', 'alpha'],
            'family-status' => ['required'],
            'family-contact' => ['required', 'numeric'],
            'family-address-street' => ['required'],
        ]);
        
        User::insert([
            'position_id' => $request->input('position'),
            'email'=> $request->input('email'),
            'password'=> $request->input('id-number')
        ]);

        $user_id = User::orderBy('id', 'desc')->pluck('id')->first();

        UserComplement::insert([
            'user_id'=> $user_id,
            'name' => $request->input('full-name'),
            'gender' => $request->input('gender'),
            'id_number' => $request->input('id-number'),
            'birth_date_place' => $request->input('birth-date-place'),
            'age' => $request->input('age'),
            'religion' => $request->input('religion'),
            'image' => $request->input('image'),
            'phone_number' => $request->input('phone-number'),
            'street' => $request->input('address-street'),
            'subdistrict' => $request->input('address-sub-district'),
            'district' => $request->input('address-district'),
            'zip_code' => $request->input('address-zip-code')
        ]);

        EmpployeeComplement::insert([
            'user_id' => $user_id,
            'marital_status' => $request->input('marital-status')
        ]);

        FamilyContact::insert([
            'user_id' => $user_id,
            'name' => $request->input('family-name'),
            'status' => $request->input('family-status'),
            'phone_number' => $request->input('family-contact'),
            'address' => $request->input('family-address-street'),
            'subdistrict' => $request->input('family-address-subdistrict'),
            'regency' => $request->input('family-address-regency'),
            'zip_code' => $request->input('family-address-zip-code')
        ]);

        return redirect()->route('employees.index')->with('success','Data karyawan berhasil ditambahkan.');
    }

    public function edit($id) {
        $employee = User::with(['user_complements', 'employee_complements', 'positions'])->findOrFail($id);
        $positions = Position::where('id', '<>', 1)->where('id', '<>', 2)->where('id', '<>', 3)->get();

        return view('employees.edit', ['employee' => $employee, 'positions' => $positions]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'full-name' => ['required', 'alpha'],
            'birth-date-place' => ['required'],
            'age' => ['required', 'numeric'],
            'email' => ['required', 'email', 'unique:users,email,'. $id],
            'gender' => ['required'],
            'religion' => ['required'],
            'marital-status' => ['required'],
            'position' => ['required'],
            'id-number' => ['required', 'numeric'],
            'phone-number' => ['required', 'numeric'],
            'address-street' => ['required'],
            'family-name' => ['required', 'alpha'],
            'family-status' => ['required'],
            'family-contact' => ['required', 'numeric'],
            'family-address-street' => ['required'],
        ]);
        
        User::where('id', $id)->update([
            'position_id' => $request->input('position'),
            'email'=> $request->input('email'),
            'password'=> $request->input('id-number')
        ]);

        UserComplement::where('user_id', $id)->update([
            'name' => $request->input('full-name'),
            'gender' => $request->input('gender'),
            'id_number' => $request->input('id-number'),
            'birth_date_place' => $request->input('birth-date-place'),
            'age' => $request->input('age'),
            'religion' => $request->input('religion'),
            'image' => $request->input('image'),
            'phone_number' => $request->input('phone-number'),
            'street' => $request->input('address-street'),
            'subdistrict' => $request->input('address-sub-district'),
            'district' => $request->input('address-district'),
            'zip_code' => $request->input('address-zip-code')
        ]);

        EmpployeeComplement::where('user_id', $id)->update([
            'marital_status' => $request->input('marital-status')
        ]);

        FamilyContact::where('user_id', $id)->update([
            'name' => $request->input('family-name'),
            'status' => $request->input('family-status'),
            'phone_number' => $request->input('family-contact'),
            'address' => $request->input('family-address-street'),
            'subdistrict' => $request->input('family-address-subdistrict'),
            'regency' => $request->input('family-address-regency'),
            'zip_code' => $request->input('family-address-zip-code')
        ]);

        return redirect()->route('employees.index')->with('success','Data karyawan berhasil diperbarui.');
    }

    public function destroy($id) {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data karyawan berhasil dihapus.');
    }
}
