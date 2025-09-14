<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();
        return view('admin.classrooms.index', compact('classrooms'));
    }

    public function create()
    {
        return view('admin.classrooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'img' => 'required|url',
        ]);

        Classroom::create($request->only(['title', 'img']));
        return redirect()->route('admin.classrooms.index')->with('success', 'เพิ่มห้องปฏิบัติการเรียบร้อย');
    }

    public function edit(Classroom $classroom)
    {
        return view('admin.classrooms.edit', compact('classroom'));
    }

    public function update(Request $request, Classroom $classroom)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'img' => 'required|url',
        ]);

        $classroom->update($request->only(['title', 'img']));
        return redirect()->route('admin.classrooms.index')->with('success', 'แก้ไขข้อมูลเรียบร้อย');
    }

    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('admin.classrooms.index')->with('success', 'ลบข้อมูลเรียบร้อย');
    }
}
