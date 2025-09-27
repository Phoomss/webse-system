@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">เพิ่มข้อมูลหลักสูตรและค่าเทอมใหม่</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">ฟอร์มเพิ่มข้อมูล</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('teacher.curriculum_tuitions.store') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title_thai" class="form-label">ชื่อ (ภาษาไทย)</label>
                                    <input type="text" class="form-control" id="title_thai" name="title_thai">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="title_english" class="form-label">ชื่อ (ภาษาอังกฤษ)</label>
                                    <input type="text" class="form-control" id="title_english" name="title_english">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="description_thai" class="form-label">คำอธิบาย (ภาษาไทย)</label>
                                    <textarea class="form-control" id="description_thai" name="description_thai" rows="3"></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="description_english" class="form-label">คำอธิบาย (ภาษาอังกฤษ)</label>
                                    <textarea class="form-control" id="description_english" name="description_english" rows="3"></textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="curriculum_pdf_url" class="form-label">ลิงก์ PDF หลักสูตร</label>
                                    <input type="url" class="form-control" id="curriculum_pdf_url" name="curriculum_pdf_url">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="is_active" class="form-label">
                                        <input type="checkbox" id="is_active" name="is_active" value="1" checked> 
                                        สถานะเปิดใช้งาน
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                        <a href="{{ route('teacher.curriculum_tuitions.index') }}" class="btn btn-secondary">ยกเลิก</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection