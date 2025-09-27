@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">แก้ไขสไลด์หน้าแรก: {{ $heroSlide->title ?? 'ไม่มีชื่อ' }}</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">ฟอร์มแก้ไขสไลด์</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('teacher.hero_slides.update', $heroSlide) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">หัวข้อสไลด์</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $heroSlide->title) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">คำบรรยายย่อ</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $heroSlide->subtitle) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="image" class="form-label">ลิงก์รูปภาพ</label>
                            <input type="url" class="form-control" id="image" name="image" value="{{ old('image', $heroSlide->image) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="link" class="form-label">ลิงก์ที่ต้องการไปเมื่อคลิก</label>
                            <input type="url" class="form-control" id="link" name="link" value="{{ old('link', $heroSlide->link) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="order" class="form-label">ลำดับการแสดงผล</label>
                            <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $heroSlide->order) }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">อัปเดตสไลด์</button>
                        <a href="{{ route('teacher.hero_slides.index') }}" class="btn btn-secondary">ยกเลิก</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection