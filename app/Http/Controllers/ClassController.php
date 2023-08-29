<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index () {
        return view('class.home');
    }

    public function allClass () {
        return view('class.all-class');
    }
}
