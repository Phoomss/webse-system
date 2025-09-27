@extends('layouts.teacher.teacher')

@section('title', 'แก้ไขข้อมูลหลักสูตร')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">แก้ไขข้อมูลหลักสูตร</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('teacher.courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_thai" class="form-label">ชื่อหลักสูตร (ภาษาไทย)</label>
                            <input type="text" class="form-control" id="title_thai" name="title_thai" value="{{ old('title_thai', $course->title_thai) }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_english" class="form-label">ชื่อหลักสูตร (ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" id="title_english" name="title_english" value="{{ old('title_english', $course->title_english) }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="degree_thai_full" class="form-label">ชื่อเต็มปริญญา (ภาษาไทย)</label>
                            <input type="text" class="form-control" id="degree_thai_full" name="degree_thai_full" value="{{ old('degree_thai_full', $course->degree_thai_full) }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="degree_thai_short" class="form-label">ชื่อย่อปริญญา (ภาษาไทย)</label>
                            <input type="text" class="form-control" id="degree_thai_short" name="degree_thai_short" value="{{ old('degree_thai_short', $course->degree_thai_short) }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="degree_english_full" class="form-label">ชื่อเต็มปริญญา (ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" id="degree_english_full" name="degree_english_full" value="{{ old('degree_english_full', $course->degree_english_full) }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="degree_english_short" class="form-label">ชื่อย่อปริญญา (ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" id="degree_english_short" name="degree_english_short" value="{{ old('degree_english_short', $course->degree_english_short) }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="total_credits" class="form-label">จำนวนหน่วยกิตทั้งหมด</label>
                            <input type="number" class="form-control" id="total_credits" name="total_credits" value="{{ old('total_credits', $course->total_credits) }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image_upload" class="form-label">อัปโหลดรูปภาพแผนภาพหลักสูตรใหม่</label>
                            <input type="file" class="form-control" id="image_upload" name="image_upload" accept="image/*">
                            <div class="form-text">หรือกรอก URL หากต้องการใช้รูปภาพจากภายนอก</div>
                            <input type="url" class="form-control mt-2" id="image_url" name="image_url" value="{{ old('image_url', filter_var($course->image_path, FILTER_VALIDATE_URL) ? $course->image_path : '') }}" placeholder="URL ของรูปภาพ (ถ้ามี)">

                            @if($course->image_path)
                                <div class="mt-3">
                                    <p>รูปภาพปัจจุบัน:</p>
                                    @if(filter_var($course->image_path, FILTER_VALIDATE_URL))
                                        <img src="{{ $course->image_path }}" alt="Current Image" class="img-thumbnail" style="max-height: 200px;">
                                    @else
                                        <img src="{{ asset('storage/' . $course->image_path) }}" alt="Current Image" class="img-thumbnail" style="max-height: 200px;">
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">บันทึก</button>
                <a href="{{ route('teacher.courses.index') }}" class="btn btn-secondary">ยกเลิก</a>
            </form>
        </div>
    </div>
</div>
@endsection
