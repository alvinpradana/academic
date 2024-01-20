<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Semester;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    public function index() {
        $semesters = Semester::orderBy('id', 'asc')->get();
        $count = Semester::sum('id');

        return view('presences.home', [
            'semesters' => $semesters,
            'count' => $count
        ]);
    }

    public function classes() {
        
    }
}
