<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = Lecturer::all();
        return view('admin.lecturers.index', compact('lecturers'));
    }

    public function create()
    {
        return view('admin.lecturers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'image' => 'nullable|url|max:500',
        ]);

        Lecturer::create($request->only(['name', 'position', 'email', 'image']));
        return redirect()->route('admin.lecturers.index')->with('success', 'เพิ่มข้อมูลอาจารย์เรียบร้อย');
    }

    public function edit(Lecturer $lecturer)
    {
        return view('admin.lecturers.edit', compact('lecturer'));
    }

    public function update(Request $request, Lecturer $lecturer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'image' => 'nullable|url|max:500',
        ]);

        $lecturer->update($request->only(['name', 'position', 'email', 'image']));
        return redirect()->route('admin.lecturers.index')->with('success', 'แก้ไขข้อมูลอาจารย์เรียบร้อย');
    }

    public function destroy(Lecturer $lecturer)
    {
        $lecturer->delete();
        return redirect()->route('admin.lecturers.index')->with('success', 'ลบข้อมูลอาจารย์เรียบร้อย');
    }
}
