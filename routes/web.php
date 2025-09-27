<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseCardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CurriculumTuitionController;
use App\Http\Controllers\HeroSlideController;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\VideoController;
use App\Models\Activity;
use App\Models\Course;
use App\Models\CourseCard;
use App\Models\CurriculumTuition;
use App\Models\HeroSlide;
use App\Models\News;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeControllers::class, 'index'])->name('home');

Route::get('/about/history', [HomeControllers::class, 'about']);

Route::get('/about/laboratory', [HomeControllers::class, 'laboratory']);

Route::get('/about/teacher', [HomeControllers::class, 'teacher']);

Route::get('/course', function () {
    $course = Course::first();
    $courseCards = CourseCard::orderBy('order')->get();
    $curriculumTuition = CurriculumTuition::where('is_active', true)->first(); // Get active curriculum tuition
    return view('pages.curriculumTuition', compact('course', 'courseCards', 'curriculumTuition'));
});

Route::get('/news-activities', function () {
    $newsList = News::latest()->take(3)->get();
    $activities = Activity::latest()->take(3)->get();
    return view('pages.news-activities', compact('newsList', 'activities'));
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

    Route::get('/abouts', [AboutController::class, 'index'])->name('admin.abouts.index');
    Route::get('/abouts/create', [AboutController::class, 'create'])->name('admin.abouts.create');
    Route::post('/abouts', [AboutController::class, 'store'])->name('admin.abouts.store');
    Route::get('/abouts/{about}/edit', [AboutController::class, 'edit'])->name('admin.abouts.edit');
    Route::put('/abouts/{about}', [AboutController::class, 'update'])->name('admin.abouts.update');
    Route::delete('/abouts/{about}', [AboutController::class, 'destroy'])->name('admin.abouts.destroy');

    Route::get('/lecturers', [LecturerController::class, 'index'])->name('admin.lecturers.index');
    Route::get('/lecturers/create', [LecturerController::class, 'create'])->name('admin.lecturers.create');
    Route::post('/lecturers', [LecturerController::class, 'store'])->name('admin.lecturers.store');
    Route::get('/lecturers/{lecturer}/edit', [LecturerController::class, 'edit'])->name('admin.lecturers.edit');
    Route::put('/lecturers/{lecturer}', [LecturerController::class, 'update'])->name('admin.lecturers.update');
    Route::delete('/lecturers/{lecturer}', [LecturerController::class, 'destroy'])->name('admin.lecturers.destroy');

    Route::get('/hero-slides', [HeroSlideController::class, 'index'])->name('admin.hero_slides.index');
    Route::get('/hero-slides/create', [HeroSlideController::class, 'create'])->name('admin.hero_slides.create');
    Route::post('/hero-slides', [HeroSlideController::class, 'store'])->name('admin.hero_slides.store');
    Route::get('/hero-slides/{heroSlide}/edit', [HeroSlideController::class, 'edit'])->name('admin.hero_slides.edit');
    Route::put('/hero-slides/{heroSlide}', [HeroSlideController::class, 'update'])->name('admin.hero_slides.update');
    Route::delete('/hero-slides/{heroSlide}', [HeroSlideController::class, 'destroy'])->name('admin.hero_slides.destroy');

    Route::get('/news', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('admin.news.store');
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/{news}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('admin.news.destroy');

    Route::get('/activities', [ActivityController::class, 'index'])->name('admin.activities.index');
    Route::get('/activities/create', [ActivityController::class, 'create'])->name('admin.activities.create');
    Route::post('/activities', [ActivityController::class, 'store'])->name('admin.activities.store');
    Route::get('/activities/{activity}/edit', [ActivityController::class, 'edit'])->name('admin.activities.edit');
    Route::put('/activities/{activity}', [ActivityController::class, 'update'])->name('admin.activities.update');
    Route::delete('/activities/{activity}', [ActivityController::class, 'destroy'])->name('admin.activities.destroy');

    Route::get('/videos', [VideoController::class, 'index'])->name('admin.videos.index');
    Route::get('/videos/create', [VideoController::class, 'create'])->name('admin.videos.create');
    Route::post('/videos', [VideoController::class, 'store'])->name('admin.videos.store');
    Route::get('/videos/{video}/edit', [VideoController::class, 'edit'])->name('admin.videos.edit');
    Route::put('/videos/{video}', [VideoController::class, 'update'])->name('admin.videos.update');
    Route::delete('/videos/{video}', [VideoController::class, 'destroy'])->name('admin.videos.destroy');

    Route::get('/courses', [CourseController::class, 'index'])->name('admin.courses.index');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('admin.courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('admin.courses.store');
    Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('admin.courses.edit');
    Route::put('/courses/{course}', [CourseController::class, 'update'])->name('admin.courses.update');
    Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');

    Route::get('/course-cards', [CourseCardController::class, 'index'])->name('admin.course_cards.index');
    Route::get('/course-cards/create', [CourseCardController::class, 'create'])->name('admin.course_cards.create');
    Route::post('/course-cards', [CourseCardController::class, 'store'])->name('admin.course_cards.store');
    Route::get('/course-cards/{courseCard}/edit', [CourseCardController::class, 'edit'])->name('admin.course_cards.edit');
    Route::put('/course-cards/{courseCard}', [CourseCardController::class, 'update'])->name('admin.course_cards.update');
    Route::delete('/course-cards/{courseCard}', [CourseCardController::class, 'destroy'])->name('admin.course_cards.destroy');

    Route::get('/curriculum-tuitions', [CurriculumTuitionController::class, 'index'])->name('admin.curriculum_tuitions.index');
    Route::get('/curriculum-tuitions/create', [CurriculumTuitionController::class, 'create'])->name('admin.curriculum_tuitions.create');
    Route::post('/curriculum-tuitions', [CurriculumTuitionController::class, 'store'])->name('admin.curriculum_tuitions.store');
    Route::get('/curriculum-tuitions/{curriculumTuition}/edit', [CurriculumTuitionController::class, 'edit'])->name('admin.curriculum_tuitions.edit');
    Route::put('/curriculum-tuitions/{curriculumTuition}', [CurriculumTuitionController::class, 'update'])->name('admin.curriculum_tuitions.update');
    Route::delete('/curriculum-tuitions/{curriculumTuition}', [CurriculumTuitionController::class, 'destroy'])->name('admin.curriculum_tuitions.destroy');
});

Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->name('teacher.dashboard')->middleware(['auth']);
