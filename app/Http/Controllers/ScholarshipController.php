<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function index() {
        return view('scholarships.home');
    }

    public function create() {
        return view('scholarships.create');
    }
}
