@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">เพิ่มการ์ดหลักสูตรใหม่</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">ฟอร์มเพิ่มการ์ด</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('teacher.course_cards.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="title_thai" class="form-label">ชื่อ (ภาษาไทย)</label>
                            <input type="text" class="form-control" id="title_thai" name="title_thai">
                        </div>
                        
                        <div class="mb-3">
                            <label for="title_english" class="form-label">ชื่อ (ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" id="title_english" name="title_english">
                        </div>
                        
                        <div class="mb-3">
                            <label for="content_thai" class="form-label">เนื้อหา (ภาษาไทย)</label>
                            <textarea class="form-control" id="content_thai" name="content_thai" rows="3"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="content_english" class="form-label">เนื้อหา (ภาษาอังกฤษ)</label>
                            <textarea class="form-control" id="content_english" name="content_english" rows="3"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="icon_class" class="form-label">คลาสไอคอน (เช่น: fas fa-graduation-cap)</label>
                            <input type="text" class="form-control" id="icon_class" name="icon_class">
                        </div>
                        
                        <div class="mb-3">
                            <label for="button_text_thai" class="form-label">ข้อความปุ่ม (ภาษาไทย)</label>
                            <input type="text" class="form-control" id="button_text_thai" name="button_text_thai">
                        </div>
                        
                        <div class="mb-3">
                            <label for="button_text_english" class="form-label">ข้อความปุ่ม (ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" id="button_text_english" name="button_text_english">
                        </div>
                        
                        <div class="mb-3">
                            <label for="button_link" class="form-label">ลิงก์ปุ่ม</label>
                            <input type="url" class="form-control" id="button_link" name="button_link">
                        </div>
                        
                        <div class="mb-3">
                            <label for="order" class="form-label">ลำดับการแสดงผล</label>
                            <input type="number" class="form-control" id="order" name="order">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">บันทึกการ์ด</button>
                        <a href="{{ route('teacher.course_cards.index') }}" class="btn btn-secondary">ยกเลิก</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection