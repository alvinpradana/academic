<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index() {
        return view('majors.home');
    }
    
    public function create() {
        return view('majors.create');
    }
}
