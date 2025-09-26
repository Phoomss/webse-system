<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required|url',
        ]);

        Video::create($request->only('title', 'url'));
        return redirect()->route('admin.videos.index')->with('success', 'เพิ่มวิดีโอเรียบร้อย');
    }

    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required|url',
        ]);

        $video->update($request->only('title', 'url'));
        return redirect()->route('admin.videos.index')->with('success', 'แก้ไขวิดีโอเรียบร้อย');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.videos.index')->with('success', 'ลบวิดีโอเรียบร้อย');
    }
}
