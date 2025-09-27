<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSlide;

class TeacherHeroSlideController extends Controller
{
    public function index()
    {
        $slides = HeroSlide::orderBy('order')->get();
        return view('teacher.hero_slides.index', compact('slides'));
    }

    public function create()
    {
        return view('teacher.hero_slides.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'required|url|max:500',
            'link' => 'nullable|url|max:500',
            'order' => 'nullable|integer',
        ]);

        $data = $request->only(['title', 'subtitle', 'image', 'link', 'order']);
        $data['created_by'] = auth()->id();

        $slide = HeroSlide::create($data);

        return redirect()->route('teacher.hero_slides.index')->with('success', 'เพิ่มสไลด์เรียบร้อย');
    }

    public function edit(HeroSlide $heroSlide)
    {

        return view('teacher.hero_slides.edit', compact('heroSlide'));
    }

    public function update(Request $request, HeroSlide $heroSlide)
    {


        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'required|url|max:500',
            'link' => 'nullable|url|max:500',
            'order' => 'nullable|integer',
        ]);

        $heroSlide->update($request->only(['title', 'subtitle', 'image', 'link', 'order']));

        return redirect()->route('teacher.hero_slides.index')->with('success', 'อัปเดตสไลด์เรียบร้อย');
    }

    public function destroy(HeroSlide $heroSlide)
    {

        $heroSlide->delete();
        return redirect()->route('teacher.hero_slides.index')->with('success', 'ลบสไลด์เรียบร้อย');
    }
}
