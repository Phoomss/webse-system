@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">เพิ่มหลักสูตรใหม่</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">ฟอร์มเพิ่มหลักสูตร</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('teacher.courses.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="title_thai" class="form-label">ชื่อหลักสูตร (ภาษาไทย)</label>
                            <input type="text" class="form-control" id="title_thai" name="title_thai">
                        </div>
                        
                        <div class="mb-3">
                            <label for="title_english" class="form-label">ชื่อหลักสูตร (ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" id="title_english" name="title_english">
                        </div>
                        
                        <div class="mb-3">
                            <label for="degree_thai_full" class="form-label">ชื่อปริญญา (ภาษาไทย เต็ม)</label>
                            <input type="text" class="form-control" id="degree_thai_full" name="degree_thai_full">
                        </div>
                        
                        <div class="mb-3">
                            <label for="degree_thai_short" class="form-label">ชื่อปริญญา (ภาษาไทย ย่อ)</label>
                            <input type="text" class="form-control" id="degree_thai_short" name="degree_thai_short">
                        </div>
                        
                        <div class="mb-3">
                            <label for="degree_english_full" class="form-label">ชื่อปริญญา (ภาษาอังกฤษ เต็ม)</label>
                            <input type="text" class="form-control" id="degree_english_full" name="degree_english_full">
                        </div>
                        
                        <div class="mb-3">
                            <label for="degree_english_short" class="form-label">ชื่อปริญญา (ภาษาอังกฤษ ย่อ)</label>
                            <input type="text" class="form-control" id="degree_english_short" name="degree_english_short">
                        </div>
                        
                        <div class="mb-3">
                            <label for="total_credits" class="form-label">หน่วยกิตทั้งหมด</label>
                            <input type="number" class="form-control" id="total_credits" name="total_credits">
                        </div>
                        
                        <div class="mb-3">
                            <label for="image_url" class="form-label">ลิงก์รูปภาพ</label>
                            <input type="url" class="form-control" id="image_url" name="image_url">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">บันทึกหลักสูตร</button>
                        <a href="{{ route('teacher.courses.index') }}" class="btn btn-secondary">ยกเลิก</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection