<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\LecturerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about/history', [HomeControllers::class,'about']);

Route::get('/about/laboratory', [HomeControllers::class, 'laboratory']);

Route::get('/about/teacher', [HomeControllers::class,'teacher']);

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
    Route::get('/classrooms/{classroom}/edit', [ClassroomController::class, 'edit'])->name('admin.classrooms.edit');
    Route::put('/classrooms/{classroom}', [ClassroomController::class, 'update'])->name('admin.classrooms.update');
    Route::delete('/classrooms/{classroom}', [ClassroomController::class, 'destroy'])->name('admin.classrooms.destroy');

    Route::get('/abouts',[AboutController::class,'index'])->name('admin.abouts.index');
    Route::get('/abouts/create',[AboutController::class,'create'])->name('admin.abouts.create');
    Route::post('/abouts',[AboutController::class,'store'])->name('admin.abouts.store');
    Route::get('/abouts/{about}/edit',[AboutController::class,'edit'])->name('admin.abouts.edit');
    Route::put('/abouts/{about}',[AboutController::class,'update'])->name('admin.abouts.update');
    Route::delete('/abouts/{about}',[AboutController::class,'destroy'])->name('admin.abouts.destroy');

    Route::get('/lecturers',[LecturerController::class,'index'])->name('admin.lecturers.index');
    Route::get('/lecturers/create',[LecturerController::class,'create'])->name('admin.lecturers.create');
    Route::post('/lecturers',[LecturerController::class,'store'])->name('admin.lecturers.store');
    Route::get('/lecturers/{lecturer}/edit',[LecturerController::class,'edit'])->name('admin.lecturers.edit');
    Route::put('/lecturers/{lecturer}',[LecturerController::class,'update'])->name('admin.lecturers.update');
    Route::delete('/lecturers/{lecturer}',[LecturerController::class,'destroy'])->name('admin.lecturers.destroy');
});

Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->name('teacher.dashboard')->middleware(['auth']);
