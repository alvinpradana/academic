<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\StudentScholarship;
use App\Models\User;
use Illuminate\Http\Request;

class StudentScholarshipController extends Controller
{
    public function index() {
        return view('scholarships.student.home');
    }

    public function create() {
        $scholarships = Scholarship::orderBy('id', 'desc')->get();
        $students = User::with(['user_complements'])->where('position_id', 2)->orderBy('id', 'asc')->get();
        
        return view('scholarships.student.create', [
            'scholarships' => $scholarships,
            'students' => $students
        ]);
    }

    public function store(Request $request) {
        StudentScholarship::insert([
            'student_id' => $request->student,
            'scholarship_id' => $request->scholarship,
            'notes' => $request->notes
        ]);

        return redirect()->route('student-scholarship.index');
    }
}
