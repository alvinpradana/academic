<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\OrganizationsController;
use App\Http\Controllers\ClassController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/teachers', [TeachersController::class, 'index']);
Route::get('/students', [StudentsController::class, 'index']);
Route::get('/lessons', [LessonsController::class, 'index']);
Route::get('/employees', [EmployeesController::class, 'index']);
Route::get('/organizations', [OrganizationsController::class, 'index']);
Route::get('/class', [ClassController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});
