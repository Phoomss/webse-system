<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Assuming teachers are users with a specific role

class TeacherProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('teacher.profile.index', compact('user'));
    }

    public function edit()
    {
        $user = auth()->user();
        return view('teacher.profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'bio' => 'nullable|string',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bio' => $request->bio,
        ]);

        return redirect()->route('teacher.profile.index')->with('success', 'อัปเดตข้อมูลส่วนตัวเรียบร้อย');
    }
}