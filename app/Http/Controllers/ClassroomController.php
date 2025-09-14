<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    // ดึงข้อมูลทั้งหมด
    public function index()
    {
        $classrooms = Classroom::all();

        return response()->json([
            'data' => $classrooms
        ]);
    }

    // สร้างห้องใหม่
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'img' => 'required|url',
        ]);

        $classroom = Classroom::create([
            'title' => $request->title,
            'img' => $request->img,
        ]);

        return response()->json([
            'message' => 'Classroom created successfully',
            'data' => $classroom
        ], 201);
    }

    // แสดงข้อมูลห้องปฏิบัติการตาม id
    public function show($id)
    {
        $classroom = Classroom::find($id);

        if (!$classroom) {
            return response()->json(['message' => 'Classroom not found'], 404);
        }

        return response()->json([
            'data' => $classroom
        ]);
    }

    // อัปเดตข้อมูลห้อง
    public function update(Request $request, $id)
    {
        $classroom = Classroom::find($id);
        if (!$classroom) {
            return response()->json(['message' => 'Classroom not found'], 404);
        }

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'img' => 'sometimes|required|url',
        ]);

        $classroom->update($request->only(['title', 'img']));

        return response()->json([
            'message' => 'Classroom updated successfully',
            'data' => $classroom
        ]);
    }

    // ลบห้อง
    public function destroy($id)
    {
        $classroom = Classroom::find($id);
        if (!$classroom) {
            return response()->json(['message' => 'Classroom not found'], 404);
        }

        $classroom->delete();

        return response()->json(['message' => 'Classroom deleted successfully']);
    }
}
