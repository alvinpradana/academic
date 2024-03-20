<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\User;

class HomeController extends Controller
{
    public function index () {
        $teachers_count = User::where('position_id', 1)->count('id');
        $students_count = User::where('position_id', 2)->count('id');
        $employee_count = User::whereNotIn('position_id', [1,2,3])->count('id');
        $class_count = Classes::count('id');
        
        return view('home', [
            'teachers_count' => $teachers_count,
            'students_count' => $students_count,
            'class_count' => $class_count,
            'employee_count' => $employee_count
        ]);
    }
}
