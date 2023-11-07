<?php

use App\Http\Controllers\ClassGroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentScholarshipController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ClassLevelController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ScholarshipController;
use App\Models\ClassGroup;
use Illuminate\Support\Facades\Route;

Route::resource('dashboard', HomeController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('students', StudentController::class);
Route::resource('positions', PositionController::class);
Route::resource('scholarships', ScholarshipController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('lessons', LessonController::class);
Route::resource('organizations', OrganizationController::class);
Route::resource('class', ClassController::class);
Route::resource('class-level', ClassLevelController::class);
Route::resource('grades', GradeController::class);
Route::resource('majors', MajorController::class);
Route::resource('student-scholarship', StudentScholarshipController::class);

Route::get('class-group/create/{class_id}', [ClassGroupController::class, 'create'])->name('class-group.create');
Route::resource('class-group', ClassGroupController::class);

Route::get('/login', function () {
    return view('login');
});

