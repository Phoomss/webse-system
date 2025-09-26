@extends('layouts.admin.admin')

@section('content')
<h1 class="mb-4">เพิ่มวิดีโอใหม่</h1>

<form action="{{ route('admin.videos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">ชื่อวิดีโอ</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">URL วิดีโอ</label>
        <input type="url" name="url" class="form-control" value="{{ old('url') }}" placeholder="https://www.youtube.com/watch?v=..." required>
        @error('url')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="form-text">กรุณากรอก URL ของวิดีโอ (เช่น YouTube, Vimeo ฯลฯ)</div>
    </div>

    <button type="submit" class="btn btn-success">บันทึก</button>
    <a href="{{ route('admin.videos.index') }}" class="btn btn-secondary">ย้อนกลับ</a>
</form>
@endsection