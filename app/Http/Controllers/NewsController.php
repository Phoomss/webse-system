<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newsList = News::latest()->get();
        return view('admin.news.index', compact('newsList'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|url|max:500',
            'link' => 'nullable|url|max:500',
        ]);

        News::create($request->only(['title','content','image','link']));

        return redirect()->route('admin.news.index')->with('success','เพิ่มข่าวเรียบร้อย');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|url|max:500',
            'link' => 'nullable|url|max:500',
        ]);

        $news->update($request->only(['title','content','image','link']));

        return redirect()->route('admin.news.index')->with('success','แก้ไขข่าวเรียบร้อย');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success','ลบข่าวเรียบร้อย');
    }
}
