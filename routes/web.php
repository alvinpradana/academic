<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\OrganizationsController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\GradesController;
use Illuminate\Support\Facades\Route;

Route::resource('dashboard', HomeController::class);
Route::resource('teachers', TeachersController::class);
Route::resource('students', StudentsController::class);
Route::resource('employees', EmployeesController::class);
Route::resource('lessons', LessonsController::class);
Route::resource('organizations', OrganizationsController::class);
Route::resource('class', ClassController::class);
Route::resource('grades', GradesController::class);

Route::get('/login', function () {
    return view('login');
});
