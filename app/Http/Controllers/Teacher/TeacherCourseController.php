<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class TeacherCourseController extends Controller
{
    public function index()
    {
       $courses = Course::latest()->get();
        return view('teacher.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('teacher.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_thai' => 'nullable|string|max:255',
            'title_english' => 'nullable|string|max:255',
            'degree_thai_full' => 'nullable|string|max:255',
            'degree_thai_short' => 'nullable|string|max:255',
            'degree_english_full' => 'nullable|string|max:255',
            'degree_english_short' => 'nullable|string|max:255',
            'total_credits' => 'nullable|integer',
            'image_url' => 'nullable|url|max:500',
        ]);

        $data = $request->only([
            'title_thai',
            'title_english',
            'degree_thai_full',
            'degree_thai_short',
            'degree_english_full',
            'degree_english_short',
            'total_credits'
        ]);

        $data['image_path'] = $request->input('image_url');
        $data['created_by'] = auth()->id();

        $course = Course::create($data);

        return redirect()->route('teacher.courses.index')->with('success','เพิ่มข้อมูลหลักสูตรเรียบร้อย');
    }

    public function edit(Course $course)
    {


        return view('teacher.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {

        $request->validate([
            'title_thai' => 'nullable|string|max:255',
            'title_english' => 'nullable|string|max:255',
            'degree_thai_full' => 'nullable|string|max:255',
            'degree_thai_short' => 'nullable|string|max:255',
            'degree_english_full' => 'nullable|string|max:255',
            'degree_english_short' => 'nullable|string|max:255',
            'total_credits' => 'nullable|integer',
            'image_url' => 'nullable|url|max:500',
        ]);

        $data = $request->only([
            'title_thai',
            'title_english',
            'degree_thai_full',
            'degree_thai_short',
            'degree_english_full',
            'degree_english_short',
            'total_credits'
        ]);

        $data['image_path'] = $request->input('image_url');

        $course->update($data);

        return redirect()->route('teacher.courses.index')->with('success','แก้ไขข้อมูลหลักสูตรเรียบร้อย');
    }

    public function destroy(Course $course)
    {


        $course->delete();
        return redirect()->route('teacher.courses.index')->with('success','ลบข้อมูลหลักสูตรเรียบร้อย');
    }
}
