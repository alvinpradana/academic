<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use App\Models\Classes;
use App\Models\User;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        $teachers = User::with([
            'user_complements'
        ])->where('position_id', 1)->get();
        $students = User::where('position_id', 2)->get();
        $class = Classes::all();
        $academic = AcademicYear::orderBy('id', 'desc')->first();
        
        return view('index', [
            'teachers' => $teachers,
            'students' => $students,
            'class' => $class,
            'academic' => $academic
        ]);
    }
}
