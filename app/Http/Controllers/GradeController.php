<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index () {
        return view('class.grade.home');
    }

    public function create() {
        return view('class.grade.create');
    }
}
