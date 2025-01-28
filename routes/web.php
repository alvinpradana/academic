<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\ChangeClassController;
use App\Http\Controllers\ClassGroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function() {
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
    Route::resource('academic-year', AcademicYearController::class);

    Route::get('/scores/academic-year-{academic}', [ScoreController::class, 'list_of_class'])->name('scores.list-of-class');
    Route::get('/scores/academic-year-{academic}/class-{class}', [ScoreController::class, 'semesters'])->name('scores.semesters');
    Route::get('/scores/academic-year-{academic}/class-{class}/semester-{semester}/list-of-task', [ScoreController::class, 'task_or_final_task'])->name('scores.list-of-task');
    Route::get('/scores/academic-year-{academic}/class-{class}/semester-{semester}/final-task', [ScoreController::class, 'list_of_final_task'])->name('scores.list-of-final-task');
    Route::get('/scores/academic-year-{academic}/class-{class}/semester-{semester}/final-task/lesson-{lesson}', [ScoreController::class, 'final_task_table'])->name('scores.final-task-table');
    Route::get('/scores/academic-year-{academic}/class-{class}/semester-{semester}/task-scores', [ScoreController::class, 'list'])->name('scores.list');
    Route::get('/scores/academic-year-{academic}/class-{class}/semester-{semester}/task-scores/score-{score}', [ScoreController::class, 'view'])->name('scores.view');
    Route::get('/scores/academic-year-{academic}/class-{class}/semester-{semester}/task-scores/score-{score}/edit', [ScoreController::class, 'edit'])->name('scores.edit-score');
    Route::put('/scores/class-{class}/score-{score}', [ScoreController::class, 'update'])->name('scores.update-score');
    Route::get('/scores/academic-year-{academic}/class-{class}/semester-{semester}/task-scores/create', [ScoreController::class, 'add'])->name('scores.add');
    Route::get('/scores/academic-year-{academic}/class-{class}/semester-{semester}/task-scores/score-{score}/print', [ScoreController::class, 'downloadPDF'])->name('scores.print');
    Route::resource('scores', ScoreController::class);

    Route::get('class-group/create/{class_id}', [ClassGroupController::class, 'create'])->name('class-group.create');
    Route::get('class-group/switch-class/{student_id}', [ClassGroupController::class, 'switchClass'])->name('class-group.switch-class');
    Route::resource('class-group', ClassGroupController::class);

    Route::resource('profile', ProfileController::class);

    Route::get('change-class/{id}', [ChangeClassController::class, 'index'])->name('change-class.index');
    Route::put('change-class', [ChangeClassController::class, 'update'])->name('change-class.update');
});

Route::middleware('guest')->group(function() {
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::post('logout', LogoutController::class)->name('logout');

Route::get('/', function () {
    return view('index');
})->name('homepage');

Route::get('/presences/{semester}/{class}/{lesson}', [PresenceController::class, 'show'])->scopeBindings();
Route::get('/presences/create/{class}', [PresenceController::class, 'create'])->name('presences-create.create')->scopeBindings();
Route::resource('presences', PresenceController::class);

