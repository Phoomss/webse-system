<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.courses.create');
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
            'image_upload' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        
        // Handle image - prioritize file upload, fallback to URL
        if ($request->hasFile('image_upload')) {
            $data['image_path'] = $request->file('image_upload')->store('course_images', 'public');
        } elseif ($request->filled('image_url')) {
            $data['image_path'] = $request->input('image_url');
        } else {
            $data['image_path'] = null; // No image provided
        }

        Course::create($data);

        return redirect()->route('admin.courses.index')->with('success','เพิ่มข้อมูลหลักสูตรเรียบร้อย');
    }

    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
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
            'image_upload' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        
        // Handle image - prioritize file upload, fallback to URL
        if ($request->hasFile('image_upload')) {
            // Delete old image if it was a stored file (not an external URL)
            if ($course->image_path && !filter_var($course->image_path, FILTER_VALIDATE_URL) && \Storage::exists($course->image_path)) {
                \Storage::delete($course->image_path);
            }
            $data['image_path'] = $request->file('image_upload')->store('course_images', 'public');
        } elseif ($request->filled('image_url')) {
            // If new URL provided, delete old stored file (if it's not a URL)
            if ($course->image_path && !filter_var($course->image_path, FILTER_VALIDATE_URL) && \Storage::exists($course->image_path)) {
                \Storage::delete($course->image_path);
            }
            $data['image_path'] = $request->input('image_url');
        } 
        // If neither is provided, keep the existing image_path

        $course->update($data);

        return redirect()->route('admin.courses.index')->with('success','แก้ไขข้อมูลหลักสูตรเรียบร้อย');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index')->with('success','ลบข้อมูลหลักสูตรเรียบร้อย');
    }
}
