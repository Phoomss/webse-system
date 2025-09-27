@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">แก้ไขกิจกรรม: {{ $activity->title }}</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">ฟอร์มแก้ไขกิจกรรม</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('teacher.activities.update', $activity) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">หัวข้อกิจกรรม</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $activity->title) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">รายละเอียด</label>
                            <textarea class="form-control" id="description" name="description" rows="5">{{ old('description', $activity->description) }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="date" class="form-label">วันที่จัดกิจกรรม</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $activity->date) }}">
                        </div>
                        
                        <div class="mb-3">
                            <label for="image" class="form-label">ลิงก์รูปภาพ</label>
                            <input type="url" class="form-control" id="image" name="image" value="{{ old('image', $activity->image) }}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">อัปเดตกิจกรรม</button>
                        <a href="{{ route('teacher.activities.index') }}" class="btn btn-secondary">ยกเลิก</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection