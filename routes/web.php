<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\LaboratoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about/history', function () {
    return view('pages.history');
});

Route::get('/about/laboratory', [LaboratoryController::class, 'index']);

Route::get('/about/teacher', function () {
    return view('pages.departmentHead');
});

Route::get('/course', function () {
    return view('pages.curriculumTuition');
});

Route::get('/news-activities', function () {
    return view('pages.newsActivities');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware(['auth']);

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/classrooms', [ClassroomController::class, 'index'])->name('admin.classrooms.index');
    Route::get('/classrooms/create', [ClassroomController::class, 'create'])->name('admin.classrooms.create');
    Route::post('/classrooms', [ClassroomController::class, 'store'])->name('admin.classrooms.store');
    Route::get('/classrooms/{classroom}/edit', [ClassroomController::class, 'edit'])->name('admin.classrooms.edit');  // เปลี่ยน {id} -> {classroom}
    Route::put('/classrooms/{classroom}', [ClassroomController::class, 'update'])->name('admin.classrooms.update'); // เปลี่ยน {id} -> {classroom}
    Route::delete('/classrooms/{classroom}', [ClassroomController::class, 'destroy'])->name('admin.classrooms.destroy'); // เปลี่ยน {id} -> {classroom}
});

Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->name('teacher.dashboard')->middleware(['auth']);
