<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index () {
        return view('students.home');
    }

    public function create() {
        return view('students.create');
    }
}
