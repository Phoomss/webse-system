<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;

class TeacherActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::latest()->get();
        return view('teacher.activities.index', compact('activities'));
    }

    public function create()
    {
        return view('teacher.activities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|url|max:500',
            'date' => 'nullable|date',
        ]);

        $data = $request->only(['title','description','image','date']);
        $data['created_by'] = auth()->id(); // Track who created the activity

        $activity = Activity::create($data);

        return redirect()->route('teacher.activities.index')->with('success','เพิ่มกิจกรรมเรียบร้อย');
    }

    public function edit(Activity $activity)
    {
   

        return view('teacher.activities.edit', compact('activity'));
    }

    public function update(Request $request, Activity $activity)
    {


        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|url|max:500',
            'date' => 'nullable|date',
        ]);

        $activity->update($request->only(['title','description','image','date']));

        return redirect()->route('teacher.activities.index')->with('success','แก้ไขกิจกรรมเรียบร้อย');
    }

    public function destroy(Activity $activity)
    {


        $activity->delete();
        return redirect()->route('teacher.activities.index')->with('success','ลบกิจกรรมเรียบร้อย');
    }
}
