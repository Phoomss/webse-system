@extends('layouts.admin.admin')

@section('content')
<h1 class="mb-4">จัดการวิดีโอ</h1>

<div class="mb-3">
    <a href="{{ route('admin.videos.create') }}" class="btn btn-primary">+ เพิ่มวิดีโอ</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="row">
    @forelse($videos as $video)
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $video->title }}</h5>
                <p class="card-text">
                    <strong>URL:</strong> 
                    <a href="{{ $video->url }}" target="_blank" class="text-decoration-none">
                        {{ Str::limit($video->url, 40) }}
                    </a>
                </p>
                <div class="mt-auto d-flex justify-content-between">
                    <a href="{{ route('admin.videos.edit', $video->id) }}" class="btn btn-warning btn-sm">แก้ไข</a>
                    <form action="{{ route('admin.videos.destroy', $video->id) }}" method="POST" onsubmit="return confirm('ยืนยันการลบวิดีโอนี้?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">ลบ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <div class="alert alert-info text-center">ยังไม่มีวิดีโอ</div>
    </div>
    @endforelse
</div>
@endsection