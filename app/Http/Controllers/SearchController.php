<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchStudentsByName(Request $request) {
        $key = '%'.$request->student.'%';
        $students = DB::table('user_complements')
            ->where('name', 'like', $key)
            ->join('users', 'user_complements.user_id', '=', 'users.id')
            ->join('student_complements', 'user_complements.user_id', '=', 'student_complements.user_id')
            ->select('users.id', 'student_complements.nip_number', 'user_complements.gender', 'user_complements.name', 'user_complements.age', 'user_complements.phone_number')
            ->orderBy('user_complements.name', 'asc')
            ->paginate(5);
        $count = $students->count();

        return view('students.search', [
            'students' => $students,
            'count' => $count
        ]);
    }
}
