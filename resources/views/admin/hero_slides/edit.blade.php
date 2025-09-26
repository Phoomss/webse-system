@extends('layouts.admin.admin')

@section('content')
<h1 class="mb-4">แก้ไข Hero Slide</h1>

<form action="{{ route('admin.hero_slides.update', $heroSlide->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">ชื่อสไลด์</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $heroSlide->title) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">คำบรรยาย</label>
        <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $heroSlide->subtitle) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">ลิงก์รูปภาพ (URL)</label>
        <input type="url" name="image" class="form-control" value="{{ old('image', $heroSlide->image) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">ลิงก์ไปยัง (ถ้ามี)</label>
        <input type="url" name="link" class="form-control" value="{{ old('link', $heroSlide->link) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">ลำดับการแสดง</label>
        <input type="number" name="order" class="form-control" value="{{ old('order', $heroSlide->order) }}">
    </div>
    <button type="submit" class="btn btn-primary">อัปเดต</button>
    <a href="{{ route('admin.hero_slides.index') }}" class="btn btn-secondary">ยกเลิก</a>
</form>
@endsection
