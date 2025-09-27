<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class TeacherNewsController extends Controller
{
    public function index()
    {
        $newsList = News::latest()->get();
        return view('teacher.news.index', compact('newsList'));
    }

    public function create()
    {
        return view('teacher.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|url|max:500',
            'link' => 'nullable|url|max:500',
        ]);

        $data = $request->only(['title', 'content', 'image', 'link']);
        $data['created_by'] = auth()->id(); // Track who created the news

        $news = News::create($data);

        return redirect()->route('teacher.news.index')->with('success', 'เพิ่มข่าวเรียบร้อย');
    }

    public function edit(News $news)
    {

        return view('teacher.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|url|max:500',
            'link' => 'nullable|url|max:500',
        ]);

        $news->update($request->only(['title', 'content', 'image', 'link']));

        return redirect()->route('teacher.news.index')->with('success', 'แก้ไขข่าวเรียบร้อย');
    }

    public function destroy(News $news)
    {

        $news->delete();
        return redirect()->route('teacher.news.index')->with('success', 'ลบข่าวเรียบร้อย');
    }
}
