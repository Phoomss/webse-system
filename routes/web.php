<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassroomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about/history', function () {
    return view('pages.history');
});

Route::get('/about/laboratory', function () {
    return view('pages.laboratory');
});

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

Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->name('teacher.dashboard')->middleware(['auth']);
