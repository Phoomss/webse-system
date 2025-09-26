<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HeroSlide;
use Illuminate\Http\Request;

class HeroSlideController extends Controller
{
    public function index()
    {
        $slides = HeroSlide::orderBy('order')->get();
        return view('admin.hero_slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.hero_slides.create');
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

        HeroSlide::create($request->only(['title', 'subtitle', 'image', 'link', 'order']));

        return redirect()->route('admin.hero_slides.index')->with('success', 'เพิ่มสไลด์เรียบร้อย');
    }

    public function edit(HeroSlide $heroSlide)
    {
        return view('admin.hero_slides.edit', compact('heroSlide'));
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

        return redirect()->route('admin.hero_slides.index')->with('success', 'อัปเดตสไลด์เรียบร้อย');
    }

    public function destroy(HeroSlide $heroSlide)
    {
        $heroSlide->delete();
        return redirect()->route('admin.hero_slides.index')->with('success', 'ลบสไลด์เรียบร้อย');
    }
}
