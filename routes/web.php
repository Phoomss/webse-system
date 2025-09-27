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
use App\Http\Controllers\TeacherController;
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

    // Admin-only routes
    Route::middleware('role:admin')->group(function () {
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

        Route::get('/teachers', [TeacherController::class, 'index'])->name('admin.teachers.index');
        Route::get('/teachers/create', [TeacherController::class, 'create'])->name('admin.teachers.create');
        Route::post('/teachers', [TeacherController::class, 'store'])->name('admin.teachers.store');
        Route::get('/teachers/{id}/edit', [TeacherController::class, 'edit'])->name('admin.teachers.edit');
        Route::put('/teachers/{id}', [TeacherController::class, 'update'])->name('admin.teachers.update');
        Route::delete('/teachers/{id}', [TeacherController::class, 'destroy'])->name('admin.teachers.destroy');

        Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('admin.users.index');
        Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('admin.users.create');
        Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('admin.users.store');
        Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('admin.users.edit');
        Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('admin.users.update');
        Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('admin.users.destroy');

        Route::get('/hero_slides', [HeroSlideController::class, 'index'])->name('admin.hero_slides.index');
        Route::get('/hero_slides/create', [HeroSlideController::class, 'create'])->name('admin.hero_slides.create');
        Route::post('/hero_slides', [HeroSlideController::class, 'store'])->name('admin.hero_slides.store');
        Route::get('/hero_slides/{heroSlide}/edit', [HeroSlideController::class, 'edit'])->name('admin.hero_slides.edit');
        Route::put('/hero_slides/{heroSlide}', [HeroSlideController::class, 'update'])->name('admin.hero_slides.update');
        Route::delete('/hero_slides/{heroSlide}', [HeroSlideController::class, 'destroy'])->name('admin.hero_slides.destroy');

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

        Route::get('/course_cards', [CourseCardController::class, 'index'])->name('admin.course_cards.index');
        Route::get('/course_cards/create', [CourseCardController::class, 'create'])->name('admin.course_cards.create');
        Route::post('/course_cards', [CourseCardController::class, 'store'])->name('admin.course_cards.store');
        Route::get('/course_cards/{courseCard}/edit', [CourseCardController::class, 'edit'])->name('admin.course_cards.edit');
        Route::put('/course_cards/{courseCard}', [CourseCardController::class, 'update'])->name('admin.course_cards.update');
        Route::delete('/course_cards/{courseCard}', [CourseCardController::class, 'destroy'])->name('admin.course_cards.destroy');

        Route::get('/curriculum_tuitions', [CurriculumTuitionController::class, 'index'])->name('admin.curriculum_tuitions.index');
        Route::get('/curriculum_tuitions/create', [CurriculumTuitionController::class, 'create'])->name('admin.curriculum_tuitions.create');
        Route::post('/curriculum_tuitions', [CurriculumTuitionController::class, 'store'])->name('admin.curriculum_tuitions.store');
        Route::get('/curriculum_tuitions/{curriculumTuition}/edit', [CurriculumTuitionController::class, 'edit'])->name('admin.curriculum_tuitions.edit');
        Route::put('/curriculum_tuitions/{curriculumTuition}', [CurriculumTuitionController::class, 'update'])->name('admin.curriculum_tuitions.update');
        Route::delete('/curriculum_tuitions/{curriculumTuition}', [CurriculumTuitionController::class, 'destroy'])->name('admin.curriculum_tuitions.destroy');
    });

    // Teacher Management Routes (for Admins)
    Route::middleware('role:admin')->group(function () {
        Route::get('/teachers', [App\Http\Controllers\TeacherController::class, 'index'])->name('admin.teachers.index');
        Route::get('/teachers/create', [App\Http\Controllers\TeacherController::class, 'create'])->name('admin.teachers.create');
        Route::post('/teachers', [App\Http\Controllers\TeacherController::class, 'store'])->name('admin.teachers.store');
        Route::get('/teachers/{id}/edit', [App\Http\Controllers\TeacherController::class, 'edit'])->name('admin.teachers.edit');
        Route::put('/teachers/{id}', [App\Http\Controllers\TeacherController::class, 'update'])->name('admin.teachers.update');
        Route::delete('/teachers/{id}', [App\Http\Controllers\TeacherController::class, 'destroy'])->name('admin.teachers.destroy');
    });
});

// Teacher Dashboard Routes (for Teachers)
Route::middleware(['auth'])->prefix('teacher')->group(function () {
    Route::get('/dashboard', function () {
        $newsCount = \App\Models\News::where('created_by', auth()->id())->count();
        $activitiesCount = \App\Models\Activity::where('created_by', auth()->id())->count();
        $videosCount = \App\Models\Video::where('created_by', auth()->id())->count();
        $slidesCount = \App\Models\HeroSlide::where('created_by', auth()->id())->count();
        $coursesCount = \App\Models\Course::where('created_by', auth()->id())->count();
        $courseCardsCount = \App\Models\CourseCard::where('created_by', auth()->id())->count();
        $curriculumTuitionsCount = \App\Models\CurriculumTuition::where('created_by', auth()->id())->count();
        $totalPostsCount = $newsCount + $activitiesCount + $videosCount + $slidesCount + $coursesCount + $courseCardsCount + $curriculumTuitionsCount;

        $recentNews = \App\Models\News::where('created_by', auth()->id())->latest()->limit(5)->get();
        $recentActivities = \App\Models\Activity::where('created_by', auth()->id())->latest()->limit(5)->get();
        $recentVideos = \App\Models\Video::where('created_by', auth()->id())->latest()->limit(5)->get();
        $recentSlides = \App\Models\HeroSlide::where('created_by', auth()->id())->latest()->limit(5)->get();
        $recentCourses = \App\Models\Course::where('created_by', auth()->id())->latest()->limit(5)->get();
        $recentCourseCards = \App\Models\CourseCard::where('created_by', auth()->id())->latest()->limit(5)->get();
        $recentCurriculumTuitions = \App\Models\CurriculumTuition::where('created_by', auth()->id())->latest()->limit(5)->get();

        // Combine all recent posts and sort by date
        $allPosts = collect();

        foreach($recentNews as $item) {
            $allPosts->push([
                'type' => 'ข่าวสาร',
                'name' => $item->title,
                'date' => $item->created_at->format('d/m/Y'),
                'id' => $item->id,
                'route' => 'teacher.news.edit'
            ]);
        }

        foreach($recentActivities as $item) {
            $allPosts->push([
                'type' => 'กิจกรรม',
                'name' => $item->title,
                'date' => $item->created_at->format('d/m/Y'),
                'id' => $item->id,
                'route' => 'teacher.activities.edit'
            ]);
        }

        foreach($recentVideos as $item) {
            $allPosts->push([
                'type' => 'วิดีโอ',
                'name' => $item->title,
                'date' => $item->created_at->format('d/m/Y'),
                'id' => $item->id,
                'route' => 'teacher.videos.edit'
            ]);
        }

        foreach($recentSlides as $item) {
            $allPosts->push([
                'type' => 'สไลด์หน้าแรก',
                'name' => $item->title,
                'date' => $item->created_at->format('d/m/Y'),
                'id' => $item->id,
                'route' => 'teacher.hero_slides.edit'
            ]);
        }

        foreach($recentCourses as $item) {
            $allPosts->push([
                'type' => 'หลักสูตร',
                'name' => $item->title_thai ?? $item->title_english ?? 'ไม่มีชื่อ',
                'date' => $item->created_at->format('d/m/Y'),
                'id' => $item->id,
                'route' => 'teacher.courses.edit'
            ]);
        }

        foreach($recentCourseCards as $item) {
            $allPosts->push([
                'type' => 'การ์ดหลักสูตร',
                'name' => $item->title_thai ?? $item->title_english ?? 'ไม่มีชื่อ',
                'date' => $item->created_at->format('d/m/Y'),
                'id' => $item->id,
                'route' => 'teacher.course_cards.edit'
            ]);
        }

        foreach($recentCurriculumTuitions as $item) {
            $allPosts->push([
                'type' => 'หลักสูตร/ค่าเทอม',
                'name' => $item->title_thai ?? $item->title_english ?? 'ไม่มีชื่อ',
                'date' => $item->created_at->format('d/m/Y'),
                'id' => $item->id,
                'route' => 'teacher.curriculum_tuitions.edit'
            ]);
        }

        // Sort by date (newest first) and take top 5
        $recentCombined = $allPosts->sortByDesc('date')->take(5)->values();

        return view('teacher.dashboard', compact(
            'newsCount', 'activitiesCount', 'videosCount', 'slidesCount',
            'coursesCount', 'courseCardsCount', 'curriculumTuitionsCount', 'totalPostsCount',
            'recentCombined'
        ));
    })->name('teacher.dashboard');

    // Teacher Profile Routes
    Route::get('/profile', [App\Http\Controllers\Teacher\TeacherProfileController::class, 'index'])->name('teacher.profile.index');
    Route::get('/profile/edit', [App\Http\Controllers\Teacher\TeacherProfileController::class, 'edit'])->name('teacher.profile.edit');
    Route::put('/profile', [App\Http\Controllers\Teacher\TeacherProfileController::class, 'update'])->name('teacher.profile.update');

    // Teacher News Routes
    Route::get('/news', [App\Http\Controllers\Teacher\TeacherNewsController::class, 'index'])->name('teacher.news.index');
    Route::get('/news/create', [App\Http\Controllers\Teacher\TeacherNewsController::class, 'create'])->name('teacher.news.create');
    Route::post('/news', [App\Http\Controllers\Teacher\TeacherNewsController::class, 'store'])->name('teacher.news.store');
    Route::get('/news/{news}', [App\Http\Controllers\Teacher\TeacherNewsController::class, 'edit'])->name('teacher.news.edit');
    Route::put('/news/{news}', [App\Http\Controllers\Teacher\TeacherNewsController::class, 'update'])->name('teacher.news.update');
    Route::delete('/news/{news}', [App\Http\Controllers\Teacher\TeacherNewsController::class, 'destroy'])->name('teacher.news.destroy');

    // Teacher Activities Routes
    Route::get('/activities', [App\Http\Controllers\Teacher\TeacherActivityController::class, 'index'])->name('teacher.activities.index');
    Route::get('/activities/create', [App\Http\Controllers\Teacher\TeacherActivityController::class, 'create'])->name('teacher.activities.create');
    Route::post('/activities', [App\Http\Controllers\Teacher\TeacherActivityController::class, 'store'])->name('teacher.activities.store');
    Route::get('/activities/{activity}', [App\Http\Controllers\Teacher\TeacherActivityController::class, 'edit'])->name('teacher.activities.edit');
    Route::put('/activities/{activity}', [App\Http\Controllers\Teacher\TeacherActivityController::class, 'update'])->name('teacher.activities.update');
    Route::delete('/activities/{activity}', [App\Http\Controllers\Teacher\TeacherActivityController::class, 'destroy'])->name('teacher.activities.destroy');

    // Teacher Videos Routes
    Route::get('/videos', [App\Http\Controllers\Teacher\TeacherVideoController::class, 'index'])->name('teacher.videos.index');
    Route::get('/videos/create', [App\Http\Controllers\Teacher\TeacherVideoController::class, 'create'])->name('teacher.videos.create');
    Route::post('/videos', [App\Http\Controllers\Teacher\TeacherVideoController::class, 'store'])->name('teacher.videos.store');
    Route::get('/videos/{video}', [App\Http\Controllers\Teacher\TeacherVideoController::class, 'edit'])->name('teacher.videos.edit');
    Route::put('/videos/{video}', [App\Http\Controllers\Teacher\TeacherVideoController::class, 'update'])->name('teacher.videos.update');
    Route::delete('/videos/{video}', [App\Http\Controllers\Teacher\TeacherVideoController::class, 'destroy'])->name('teacher.videos.destroy');

    // Teacher Hero Slides Routes
    Route::get('/hero_slides', [App\Http\Controllers\Teacher\TeacherHeroSlideController::class, 'index'])->name('teacher.hero_slides.index');
    Route::get('/hero_slides/create', [App\Http\Controllers\Teacher\TeacherHeroSlideController::class, 'create'])->name('teacher.hero_slides.create');
    Route::post('/hero_slides', [App\Http\Controllers\Teacher\TeacherHeroSlideController::class, 'store'])->name('teacher.hero_slides.store');
    Route::get('/hero_slides/{heroSlide}', [App\Http\Controllers\Teacher\TeacherHeroSlideController::class, 'edit'])->name('teacher.hero_slides.edit');
    Route::put('/hero_slides/{heroSlide}', [App\Http\Controllers\Teacher\TeacherHeroSlideController::class, 'update'])->name('teacher.hero_slides.update');
    Route::delete('/hero_slides/{heroSlide}', [App\Http\Controllers\Teacher\TeacherHeroSlideController::class, 'destroy'])->name('teacher.hero_slides.destroy');

    // Teacher Courses Routes
    Route::get('/courses', [App\Http\Controllers\Teacher\TeacherCourseController::class, 'index'])->name('teacher.courses.index');
    Route::get('/courses/create', [App\Http\Controllers\Teacher\TeacherCourseController::class, 'create'])->name('teacher.courses.create');
    Route::post('/courses', [App\Http\Controllers\Teacher\TeacherCourseController::class, 'store'])->name('teacher.courses.store');
    Route::get('/courses/{course}', [App\Http\Controllers\Teacher\TeacherCourseController::class, 'edit'])->name('teacher.courses.edit');
    Route::put('/courses/{course}', [App\Http\Controllers\Teacher\TeacherCourseController::class, 'update'])->name('teacher.courses.update');
    Route::delete('/courses/{course}', [App\Http\Controllers\Teacher\TeacherCourseController::class, 'destroy'])->name('teacher.courses.destroy');

    // Teacher Course Cards Routes
    Route::get('/course_cards', [App\Http\Controllers\Teacher\TeacherCourseCardController::class, 'index'])->name('teacher.course_cards.index');
    Route::get('/course_cards/create', [App\Http\Controllers\Teacher\TeacherCourseCardController::class, 'create'])->name('teacher.course_cards.create');
    Route::post('/course_cards', [App\Http\Controllers\Teacher\TeacherCourseCardController::class, 'store'])->name('teacher.course_cards.store');
    Route::get('/course_cards/{courseCard}', [App\Http\Controllers\Teacher\TeacherCourseCardController::class, 'edit'])->name('teacher.course_cards.edit');
    Route::put('/course_cards/{courseCard}', [App\Http\Controllers\Teacher\TeacherCourseCardController::class, 'update'])->name('teacher.course_cards.update');
    Route::delete('/course_cards/{courseCard}', [App\Http\Controllers\Teacher\TeacherCourseCardController::class, 'destroy'])->name('teacher.course_cards.destroy');

    // Teacher Curriculum Tuitions Routes
    Route::get('/curriculum_tuitions', [App\Http\Controllers\Teacher\TeacherCurriculumTuitionController::class, 'index'])->name('teacher.curriculum_tuitions.index');
    Route::get('/curriculum_tuitions/create', [App\Http\Controllers\Teacher\TeacherCurriculumTuitionController::class, 'create'])->name('teacher.curriculum_tuitions.create');
    Route::post('/curriculum_tuitions', [App\Http\Controllers\Teacher\TeacherCurriculumTuitionController::class, 'store'])->name('teacher.curriculum_tuitions.store');
    Route::get('/curriculum_tuitions/{curriculumTuition}', [App\Http\Controllers\Teacher\TeacherCurriculumTuitionController::class, 'edit'])->name('teacher.curriculum_tuitions.edit');
    Route::put('/curriculum_tuitions/{curriculumTuition}', [App\Http\Controllers\Teacher\TeacherCurriculumTuitionController::class, 'update'])->name('teacher.curriculum_tuitions.update');
    Route::delete('/curriculum_tuitions/{curriculumTuition}', [App\Http\Controllers\Teacher\TeacherCurriculumTuitionController::class, 'destroy'])->name('teacher.curriculum_tuitions.destroy');
});


