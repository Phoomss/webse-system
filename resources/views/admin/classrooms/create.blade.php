@extends('layouts.admin.admin')

@section('content')
    <h1 class="mb-4">เพิ่มห้องปฏิบัติการ</h1>

    <form action="{{ route('admin.classrooms.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">ชื่อห้องปฏิบัติการ</label>
            <input type="text" name="title" id="title" class="form-control" required value="{{ old('title') }}">
            @error('title')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">ลิงก์รูปภาพ</label>
            <input type="url" name="img" id="img" class="form-control" required value="{{ old('img') }}">
            @error('img')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">บันทึก</button>
        <a href="{{ route('admin.classrooms.index') }}" class="btn btn-secondary">ยกเลิก</a>
    </form>
@endsection
