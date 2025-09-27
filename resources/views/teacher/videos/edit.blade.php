@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">แก้ไขวิดีโอ: {{ $video->title }}</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">ฟอร์มแก้ไขวิดีโอ</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('teacher.videos.update', $video) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">หัวข้อวิดีโอ</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $video->title) }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="url" class="form-label">ลิงก์วิดีโอ (YouTube, Vimeo ฯลฯ)</label>
                            <input type="url" class="form-control" id="url" name="url" value="{{ old('url', $video->url) }}" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">อัปเดตวิดีโอ</button>
                        <a href="{{ route('teacher.videos.index') }}" class="btn btn-secondary">ยกเลิก</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection