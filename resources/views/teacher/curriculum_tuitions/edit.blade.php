@extends('layouts.teacher.teacher')

@section('title', 'แก้ไขการ์ดหลักสูตร')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">แก้ไขการ์ดหลักสูตร</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('teacher.course_cards.update', $courseCard->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_thai" class="form-label">ชื่อการ์ด (ภาษาไทย)</label>
                            <input type="text" class="form-control" id="title_thai" name="title_thai" value="{{ old('title_thai', $courseCard->title_thai) }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_english" class="form-label">ชื่อการ์ด (ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" id="title_english" name="title_english" value="{{ old('title_english', $courseCard->title_english) }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="content_thai" class="form-label">เนื้อหา (ภาษาไทย)</label>
                            <textarea class="form-control" id="content_thai" name="content_thai" rows="3">{{ old('content_thai', $courseCard->content_thai) }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="content_english" class="form-label">เนื้อหา (ภาษาอังกฤษ)</label>
                            <textarea class="form-control" id="content_english" name="content_english" rows="3">{{ old('content_english', $courseCard->content_english) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="icon_class" class="form-label">คลาสไอคอน (เช่น bi-mortarboard-fill)</label>
                            <input type="text" class="form-control" id="icon_class" name="icon_class" value="{{ old('icon_class', $courseCard->icon_class) }}" placeholder="ชื่อคลาสของไอคอน Bootstrap Icons">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="order" class="form-label">ลำดับการแสดงผล</label>
                            <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $courseCard->order) }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="button_text_thai" class="form-label">ข้อความปุ่ม (ภาษาไทย)</label>
                            <input type="text" class="form-control" id="button_text_thai" name="button_text_thai" value="{{ old('button_text_thai', $courseCard->button_text_thai) }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="button_text_english" class="form-label">ข้อความปุ่ม (ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" id="button_text_english" name="button_text_english" value="{{ old('button_text_english', $courseCard->button_text_english) }}">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="button_link" class="form-label">ลิงก์ปุ่ม</label>
                    <input type="url" class="form-control" id="button_link" name="button_link" value="{{ old('button_link', $courseCard->button_link) }}" placeholder="https://example.com">
                </div>

                <button type="submit" class="btn btn-success">บันทึก</button>
                <a href="{{ route('teacher.course_cards.index') }}" class="btn btn-secondary">ยกเลิก</a>
            </form>
        </div>
    </div>
</div>
@endsection
