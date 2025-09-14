@extends('layouts.admin.admin')

@section('content')
    <h1 class="mb-4">แก้ไขห้องปฏิบัติการ</h1>

    <form action="{{ route('admin.classrooms.update', $classroom->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">ชื่อห้องปฏิบัติการ</label>
            <input type="text" name="title" id="title" class="form-control"
                value="{{ old('title', $classroom->title) }}" required>
            @error('title')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">ลิงก์รูปภาพ</label>
            <input type="url" name="img" id="img" class="form-control"
                value="{{ old('img', $classroom->img) }}" required>
            @error('img')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">อัปเดต</button>
        <a href="{{ route('admin.classrooms.index') }}" class="btn btn-secondary">ยกเลิก</a>
    </form>
@endsection
