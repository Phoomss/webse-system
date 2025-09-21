@extends('layouts.admin.admin')

@section('content')
<h1 class="mb-4">{{ isset($lecturer) ? 'แก้ไขอาจารย์' : 'เพิ่มอาจารย์' }}</h1>

<form action="{{ isset($lecturer) ? route('admin.lecturers.update', $lecturer->id) : route('admin.lecturers.store') }}"
      method="POST">
    @csrf
    @if(isset($lecturer))
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">ชื่ออาจารย์</label>
        <input type="text" name="name" id="name" class="form-control"
               value="{{ old('name', $lecturer->name ?? '') }}" required>
        @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
        <label for="position" class="form-label">ตำแหน่ง</label>
        <input type="text" name="position" id="position" class="form-control"
               value="{{ old('position', $lecturer->position ?? '') }}" required>
        @error('position')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">อีเมล</label>
        <input type="email" name="email" id="email" class="form-control"
               value="{{ old('email', $lecturer->email ?? '') }}">
        @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">URL รูปภาพ</label>
        <input type="url" name="image" id="image" class="form-control"
               value="{{ old('image', $lecturer->image ?? '') }}">
        @error('image')<div class="text-danger small">{{ $message }}</div>@enderror
    </div>

    <button type="submit" class="btn btn-success">{{ isset($lecturer) ? 'อัปเดต' : 'บันทึก' }}</button>
    <a href="{{ route('admin.lecturers.index') }}" class="btn btn-secondary">ยกเลิก</a>
</form>
@endsection
