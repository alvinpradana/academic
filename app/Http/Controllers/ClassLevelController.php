<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassLevelController extends Controller
{
    public function index() {
        return view('class.level.home');
    }

    public function create() {
        return view('class.level.create');
    }
}
