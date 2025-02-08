<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
 
class ProfileController extends Controller
{
    public function index() {
        $image = Storage::url(Auth::user()->user_complements->image);
        return view('profile.index', compact('image'));
    }

    public function changePassword() {
        return view('profile.change-password');
    }

    public function updatePassword(Request $request) {
        $user = User::where('id', Auth::user()->id)->first();

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

    public function changeImage() {
        return view('profile.change-image');
    }

    public function storeImage(ImageRequest $request) {
        if ($request->has('image-file')) {
            $image_path = $request->file('image-file')->store('image', 'public');
            $request->user()->user_complements()->update(['image' => $image_path]);
        }

        return redirect()->route('profile.index')->with('success', 'Profile image updated successfully.');
    }
}
