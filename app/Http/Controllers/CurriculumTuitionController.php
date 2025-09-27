<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CurriculumTuition;
use Illuminate\Http\Request;

class CurriculumTuitionController extends Controller
{
    public function index()
    {
        $curriculumTuition = CurriculumTuition::latest()->get();
        return view('admin.curriculum_tuitions.index', compact('curriculumTuition'));
    }

    public function create()
    {
        return view('admin.curriculum_tuitions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_thai' => 'nullable|string|max:255',
            'title_english' => 'nullable|string|max:255',
            'description_thai' => 'nullable|string',
            'description_english' => 'nullable|string',
            'tuition_fees' => 'nullable|array',
            'tuition_fees.*.semester' => 'nullable|string|max:100',
            'tuition_fees.*.fee' => 'nullable|string|max:100',
            'tuition_fees.*.note' => 'nullable|string|max:255',
            'curriculum_years' => 'nullable|array',
            'curriculum_years.*.year' => 'nullable|string|max:100',
            'curriculum_years.*.description' => 'nullable|string',
            'curriculum_pdf_url' => 'nullable|url|max:500',
            'curriculum_pdf_name_thai' => 'nullable|string|max:255',
            'curriculum_pdf_name_english' => 'nullable|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        $data = $request->except('tuition_fees', 'curriculum_years');
        $data['tuition_fees'] = $request->input('tuition_fees', []);
        $data['curriculum_years'] = $request->input('curriculum_years', []);
        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        CurriculumTuition::create($data);

        return redirect()->route('admin.curriculum_tuitions.index')->with('success','เพิ่มข้อมูลหลักสูตรและค่าเทอมเรียบร้อย');
    }

    public function edit(CurriculumTuition $curriculumTuition)
    {
        return view('admin.curriculum_tuitions.edit', compact('curriculumTuition'));
    }

    public function update(Request $request, CurriculumTuition $curriculumTuition)
    {
        $request->validate([
            'title_thai' => 'nullable|string|max:255',
            'title_english' => 'nullable|string|max:255',
            'description_thai' => 'nullable|string',
            'description_english' => 'nullable|string',
            'tuition_fees' => 'nullable|array',
            'tuition_fees.*.semester' => 'nullable|string|max:100',
            'tuition_fees.*.fee' => 'nullable|string|max:100',
            'tuition_fees.*.note' => 'nullable|string|max:255',
            'curriculum_years' => 'nullable|array',
            'curriculum_years.*.year' => 'nullable|string|max:100',
            'curriculum_years.*.description' => 'nullable|string',
            'curriculum_pdf_url' => 'nullable|url|max:500',
            'curriculum_pdf_name_thai' => 'nullable|string|max:255',
            'curriculum_pdf_name_english' => 'nullable|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        $data = $request->except('tuition_fees', 'curriculum_years');
        $data['tuition_fees'] = $request->input('tuition_fees', []);
        $data['curriculum_years'] = $request->input('curriculum_years', []);
        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        $curriculumTuition->update($data);

        return redirect()->route('admin.curriculum_tuitions.index')->with('success','แก้ไขข้อมูลหลักสูตรและค่าเทอมเรียบร้อย');
    }

    public function destroy(CurriculumTuition $curriculumTuition)
    {
        $curriculumTuition->delete();
        return redirect()->route('admin.curriculum_tuitions.index')->with('success','ลบข้อมูลหลักสูตรและค่าเทอมเรียบร้อย');
    }
}
