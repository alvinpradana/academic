<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        
        if(Auth::attempt($attributes)) {
            return redirect(route('dashboard.index'));
        }

        throw ValidationException::withMessages([
            'error' => 'Your credentials does not match with our records.',
        ]);
    }
}
