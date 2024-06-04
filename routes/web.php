<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\ProgramLevelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ProgramDurationController;
use App\Http\Controllers\backend\ProgramController;
use App\Http\Controllers\backend\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Homepage Route
Route::get('/', function () {
    return view('index');
});


// Registration Route
Route::get('/registration', function () {
    return view('registration');
});


// Login Route
Route::get('/student_login', function () {
    return view('Login.student_login');
});

Route::get('/Teacher_login', function () {
    return view('Login.Teacher_login');
});


// Login Forgot Password Section Route
Route::get('/EmailVerification', function () {
    return view('Login.EmailVerification');
});

Route::get('/ConfirmPassword', function () {
    return view('Login.ConfirmPassword');
});


// Student Dashboard Route
Route::get('/studentdashboard', function () {
    return view('student.studentdashboard');
});

Route::get('/studentdashboard_teachers', function () {
    return view('student.studentdashboard_teachers');
});

Route::get('/studentdashboard_subjects', function () {
    return view('student.studentdashboard_subjects');
});

Route::get('/studentdashboard_resources', function () {
    return view('student.studentdashboard_resources');
});
Route::get('/studentdashboard_comment&query', function () {
    return view('student.studentdashboard_comment&query');
});

Route::get('/studentdashboard_view_profile', function () {
    return view('student.studentdashboard_view_profile');
});

Route::get('/studentdashboard_edit_profile', function () {
    return view('student.studentdashboard_edit_profile');
});

Route::get('/studentdashboard_password_reset', function () {
    return view('student.studentdashboard_password_reset');
});

// Teacher Dashboard Route
Route::get('/teacherdashboard', function () {
    return view('teacher.teacherdashboard');
});
Route::get('/teacherdashboard_students', function () {
    return view('teacher.teacherdashboard_students');
});
Route::get('/teacherdashboard_studentdetails', function () {
    return view('teacher.teacherdashboard_studentdetails');
});
Route::get('/teacherdashboard_internalevaluation', function () {
    return view('teacher.teacherdashboard_internalevaluation');
});

Route::get('/teacherdashboard_resources', function () {
    return view('teacher.teacherdashboard_resources');
});
Route::get('/teacherdashboard_comment&query', function () {
    return view('teacher.teacherdashboard_comment&query');
});

Route::get('/teacherdashboard_view_profile', function () {
    return view('teacher.teacherdashboard_view_profile');
});

Route::get('/teacherdashboard_edit_profile', function () {
    return view('teacher.teacherdashboard_edit_profile');
});

Route::get('/teacherdashboard_password_reset', function () {
    return view('teacher.teacherdashboard_password_reset');
});

Route::get('/teacherdashboard_internalevaluation_form', function () {
    return view('teacher.teacherdashboard_internalevaluation_form');
});








// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route::get('/students.register', function () {
//     return view('students.register');
// })->name('students.register');

// Route::get('/copy',function(){
//     return view('students/copy');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// Route::middleware('auth')->group(function () {
//     Route::get('/program-level', [ProgramLevelController::class, 'index'])->name('program.level');
//     Route::post('/program-level', [ProgramLevelController::class, 'store'])->name('programlevel.store');
//     Route::get('/program-level/{id}/disable', [ProgramLevelController::class, 'disable'])->name('disable.record');
//     Route::get('/program-level/{id}/enable', [ProgramLevelController::class, 'enable'])->name('enable.record');

//     Route::get('/program-duration', [ProgramDurationController::class, 'index'])->name('program.duration');
//     Route::post('/program-duration', [ProgramDurationController::class, 'store'])->name('programduration.store');
//     Route::get('/program-duration/{id}/disable', [ProgramDurationController::class, 'disable'])->name('program-duration.disable.record');
//     Route::get('/program-duration/{id}/enable', [ProgramDurationController::class, 'enable'])->name('program-duration.enable.record');
  
//     Route::get('/add-program', [ProgramController::class, 'index'])->name('program.add');
//     Route::post('/add-program', [ProgramController::class, 'store'])->name('program.store');

//     Route::get('/add-teacher', [TeacherController::class, 'index'])->name('teacher.add');
//     Route::post('/add-teacher', [TeacherController::class, 'store'])->name('teachers.store');




// });

require __DIR__.'/auth.php';
