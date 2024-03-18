<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\StudentScholarship;
use App\Models\User;
use Illuminate\Http\Request;

class StudentScholarshipController extends Controller
{
    public function index() {
        $scholarships = StudentScholarship::with('users')
            ->with('scholarships')
            ->orderBy('id', 'desc')
            ->get();
        $count = StudentScholarship::sum('id');

        return view('scholarships.student.home', [
            'scholarships' => $scholarships,
            'count' => $count
        ]);
    }

    public function show($id) {
        $student_scholarship = StudentScholarship::find($id);

        return view('scholarships.student.show', [
            'student_scholarship' => $student_scholarship
        ]);
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

        return redirect()->route('student-scholarship.index')->with('success', 'Data penerima beasiswa berhasil ditambahkan.');
    }

    public function edit($id) {
        $student_scholarship = StudentScholarship::find($id);
        $scholarships = Scholarship::orderBy('id', 'desc')->get();
        $students = User::with(['user_complements'])->where('position_id', 2)->orderBy('id', 'asc')->get();

        return view('scholarships.student.edit', [
            'student_scholarship' => $student_scholarship,
            'scholarships' => $scholarships,
            'students' => $students
        ]);
    }

    public function update(Request $request, $id) {
        StudentScholarship::where('id', $id)->update([
            'student_id' => $request->student,
            'scholarship_id' => $request->scholarship,
            'notes' => $request->notes
        ]);

        return redirect()->route('student-scholarship.index')->with('success', 'Data penerima beasiswa berhasil diperbarui.');
    }

    public function destroy($id) {
        StudentScholarship::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Data penerima beasiswa berhasil dihapus');
    }
}
