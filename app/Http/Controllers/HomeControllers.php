<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\CourseCard;
use App\Models\HeroSlide;
use App\Models\Lecturer;
use App\Models\News;
use App\Models\Activity;
use App\Models\CurriculumTuition;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeControllers extends Controller
{
    public function index()
    {
        $slides = HeroSlide::orderBy('order')->get();
        $newsList = News::latest()->take(6)->get(); // ดึงข่าวล่าสุด 6 ข่าว
        $activities = Activity::latest()->take(6)->get(); // ดึงกิจกรรมล่าสุด 6 กิจกรรม
        $videos = Video::all(); // ดึงวิดีโอทั้งหมด
        $course = Course::first(); // ดึงข้อมูลหลักสูตร
        $courseCards = CourseCard::orderBy('order')->get(); // ดึงการ์ดหลักสูตรทั้งหมด
        $curriculumTuition = CurriculumTuition::where('is_active', true)->first(); // ดึงข้อมูลหลักสูตรและค่าเทอม
        return view('index', compact('slides', 'newsList', 'activities', 'videos', 'course', 'courseCards', 'curriculumTuition'));
    }

    public function laboratory()
    {
        $classrooms = Classroom::all();
        return view('pages.laboratory', compact('classrooms'));
    }

    public function about()
    {
        $about = About::first();
        return view('pages.history', compact('about'));
    }

    public function teacher(){
        $teacher = Lecturer::all();
        return view('pages.departmentHead', compact('teacher'));
    }

    public function hero_slice(){
        $teacher = Lecturer::all();
        return view('components.image-hero', compact('heroSlides'));
    }
}
