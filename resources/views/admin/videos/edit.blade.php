@extends('layouts.admin.admin')

@section('content')
<h1 class="mb-4">แก้ไขวิดีโอ</h1>

<form action="{{ route('admin.videos.update', $video->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">ชื่อวิดีโอ</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $video->title) }}" required>
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">URL วิดีโอ</label>
        <input type="url" name="url" class="form-control" value="{{ old('url', $video->url) }}" placeholder="https://www.youtube.com/watch?v=..." required>
        @error('url')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="form-text">กรุณากรอก URL ของวิดีโอ (เช่น YouTube, Vimeo ฯลฯ)</div>
    </div>

    <button type="submit" class="btn btn-success">อัปเดต</button>
    <a href="{{ route('admin.videos.index') }}" class="btn btn-secondary">ย้อนกลับ</a>
</form>
@endsection