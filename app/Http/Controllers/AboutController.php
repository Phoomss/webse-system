<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'history' => 'required|string|max:1000',
            'philosophy' => 'required|string|max:1000',
            'mission' => 'required|string|max:1000',
            'vision' => 'required|string|max:1000',
        ]);

        About::create($request->only(['history', 'philosophy', 'mission', 'vision']));
        return redirect()->route('admin.about.index')->with('success', 'เพิ่มข้อมูลเรียบร้อย');
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'history' => 'required|string|max:1000',
            'philosophy' => 'required|string|max:1000',
            'mission' => 'required|string|max:1000',
            'vision' => 'required|string|max:1000',
        ]);

        $about->update($request->only(['history', 'philosophy', 'mission', 'vision']));
        return redirect()->route('admin.abouts.index')->with('success', 'แก้ไขข้อมูลเรียบร้อย');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('admin.abouts.index')->with('success', 'ลบข้อมูลเรียบร้อย');
    }
}
