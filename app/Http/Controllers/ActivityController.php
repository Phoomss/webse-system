<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::latest()->get();
        return view('admin.activities.index', compact('activities'));
    }

    public function create()
    {
        return view('admin.activities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|url|max:500',
            'date' => 'nullable|date',
        ]);

        Activity::create($request->only(['title','description','image','date']));

        return redirect()->route('admin.activities.index')->with('success','เพิ่มกิจกรรมเรียบร้อย');
    }

    public function edit(Activity $activity)
    {
        return view('admin.activities.edit', compact('activity'));
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

        return redirect()->route('admin.activities.index')->with('success','แก้ไขกิจกรรมเรียบร้อย');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('admin.activities.index')->with('success','ลบกิจกรรมเรียบร้อย');
    }
}
