<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class TeacherVideoController extends Controller
{
    public function index()
    {
     $videos = Video::all();
        return view('teacher.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('teacher.videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required|url',
        ]);

        $data = $request->only('title', 'url');
        $data['created_by'] = auth()->id(); // Track who created the video

        $video = Video::create($data);
        return redirect()->route('teacher.videos.index')->with('success', 'เพิ่มวิดีโอเรียบร้อย');
    }

    public function edit(Video $video)
    {

        return view('teacher.videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {


        $request->validate([
            'title' => 'required',
            'url' => 'required|url',
        ]);

        $video->update($request->only('title', 'url'));
        return redirect()->route('teacher.videos.index')->with('success', 'แก้ไขวิดีโอเรียบร้อย');
    }

    public function destroy(Video $video)
    {

        $video->delete();
        return redirect()->route('teacher.videos.index')->with('success', 'ลบวิดีโอเรียบร้อย');
    }
}
