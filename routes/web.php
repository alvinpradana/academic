<?php

use App\Http\Controllers\ClassGroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\SemesterController;
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
Route::resource('semesters', SemesterController::class);

Route::get('/scores/list/{class}', [ScoreController::class, 'list'])->name('scores.list');
Route::get('/scores/list/{class}/view/{id}', [ScoreController::class, 'view'])->name('scores.view');
Route::get('/scores/create/{class}', [ScoreController::class, 'add'])->name('scores.add');
Route::resource('scores', ScoreController::class);

Route::get('/presences/{semester}/{class}/{lesson}', [PresenceController::class, 'show'])->scopeBindings();
Route::get('/presences/create/{class}', [PresenceController::class, 'create'])->name('presences-create.create')->scopeBindings();
Route::resource('presences', PresenceController::class);

Route::get('class-group/create/{class_id}', [ClassGroupController::class, 'create'])->name('class-group.create');
Route::resource('class-group', ClassGroupController::class);

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('index');
});

