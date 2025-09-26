@extends('layouts.admin.admin')

@section('content')
<h1 class="mb-4">แก้ไขกิจกรรม</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.activities.update', $activity->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">หัวข้อ</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $activity->title) }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">รายละเอียด</label>
        <textarea name="description" class="form-control" rows="4">{{ old('description', $activity->description) }}</textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">ลิงก์รูปภาพ</label>
        <input type="url" name="image" class="form-control" value="{{ old('image', $activity->image) }}">
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">วันที่</label>
        <input type="date" name="date" class="form-control" value="{{ old('date', $activity->date) }}">
    </div>

    <button type="submit" class="btn btn-success">บันทึก</button>
    <a href="{{ route('admin.activities.index') }}" class="btn btn-secondary">ยกเลิก</a>
</form>
@endsection
