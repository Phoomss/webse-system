<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseCard;

class TeacherCourseCardController extends Controller
{
    public function index()
    {
        $courseCards = CourseCard::query()->orderBy('order')->get();
        return view('teacher.course_cards.index', compact('courseCards'));
    }

    public function create()
    {
        return view('teacher.course_cards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_thai' => 'nullable|string|max:255',
            'title_english' => 'nullable|string|max:255',
            'content_thai' => 'nullable|string',
            'content_english' => 'nullable|string',
            'icon_class' => 'nullable|string|max:100',
            'button_text_thai' => 'nullable|string|max:100',
            'button_text_english' => 'nullable|string|max:100',
            'button_link' => 'nullable|url|max:500',
            'order' => 'nullable|integer',
        ]);

        $data = $request->only([
            'title_thai',
            'title_english',
            'content_thai',
            'content_english',
            'icon_class',
            'button_text_thai',
            'button_text_english',
            'button_link',
            'order'
        ]);
        $data['created_by'] = auth()->user()->id;

        CourseCard::create($data);

        return redirect()->route('teacher.course_cards.index')->with('success','เพิ่มข้อมูลการ์ดหลักสูตรเรียบร้อย');
    }

    public function edit(CourseCard $courseCard)
    {


        return view('teacher.course_cards.edit', compact('courseCard'));
    }

    public function update(Request $request, CourseCard $courseCard)
    {

        $request->validate([
            'title_thai' => 'nullable|string|max:255',
            'title_english' => 'nullable|string|max:255',
            'content_thai' => 'nullable|string',
            'content_english' => 'nullable|string',
            'icon_class' => 'nullable|string|max:100',
            'button_text_thai' => 'nullable|string|max:100',
            'button_text_english' => 'nullable|string|max:100',
            'button_link' => 'nullable|url|max:500',
            'order' => 'nullable|integer',
        ]);

        $courseCard->update($request->only([
            'title_thai',
            'title_english',
            'content_thai',
            'content_english',
            'icon_class',
            'button_text_thai',
            'button_text_english',
            'button_link',
            'order'
        ]));

        return redirect()->route('teacher.course_cards.index')->with('success','แก้ไขข้อมูลการ์ดหลักสูตรเรียบร้อย');
    }

    public function destroy(CourseCard $courseCard)
    {


        $courseCard->delete();
        return redirect()->route('teacher.course_cards.index')->with('success','ลบข้อมูลการ์ดหลักสูตรเรียบร้อย');
    }
}
