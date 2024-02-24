<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index() {
        $class = Classes::with([
            'majors',
            'levels',
            'grades'
        ])->orderBy('id', 'asc')->get();

        $count = $class->sum('id');

        return view('students.scores.index', [
            'class' => $class,
            'count' => $count
        ]);
    }

    public function list() {
        return view('students.scores.list');
    }

    public function lessons() {
        return view('students.scores.lessons');
    }

    public function load() {
        return view('students.scores.show');
    }
}
