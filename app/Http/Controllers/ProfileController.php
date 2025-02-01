<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return view('profile.index');
    }

    public function changePassword() {
        return view('profile.change-password');
    }

    public function updatePassword(Request $request) {
        $user = User::where('id', $request->input('user-id'))->first();

        request()->validate([
            'current-password' => ['required'],
            'new-password' => ['required'],
            'confirm-new-password' => ['required']
        ]);
        
        $current_password = $request->input('current-password');
        $new_password = $request->input('new-password');
        $confirm_new_password = $request->input('confirm-new-password');

        if (Hash::check($current_password, $user->password)) {
            if ($new_password == $confirm_new_password) {
                User::where('id', Auth::user()->id)->update([
                    'password' => bcrypt($request->input('new-password'))
                ]);
                return redirect()->route('profile.index')->with('success', 'Password updated successfully.');
            } else {
                return redirect()->back()->with('error', 'New password does not match.');
            }
        } else {
            return redirect()->back()->with('error', 'Cuurent password does not match with our record.');
        }
    }
}
