@extends('layouts.admin.admin')

@section('content')
<h1 class="mb-4">แก้ไขข่าว</h1>

<form action="{{ route('admin.news.update', $news->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">หัวข้อข่าว</label>
        <input type="text" name="title" class="form-control" value="{{ $news->title }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">เนื้อหา</label>
        <textarea name="content" class="form-control" rows="5">{{ $news->content }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">ลิงก์รูป (URL)</label>
        <input type="url" name="image" class="form-control" value="{{ $news->image }}">
    </div>

    <div class="mb-3">
        <label class="form-label">ลิงก์เพิ่มเติม</label>
        <input type="url" name="link" class="form-control" value="{{ $news->link }}">
    </div>

    <button type="submit" class="btn btn-success">อัปเดต</button>
    <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">ย้อนกลับ</a>
</form>
@endsection
