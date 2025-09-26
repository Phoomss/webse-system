@extends('layouts.admin.admin')

@section('content')
<h1 class="mb-4">จัดการข่าวสาร</h1>

<div class="mb-3">
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary">+ เพิ่มข่าว</a>
</div>

<div class="row">
    @forelse($newsList as $news)
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm">
            @if($news->image)
            <img src="{{ $news->image }}" class="card-img-top" style="height:200px; object-fit:cover;" alt="{{ $news->title }}">
            @endif
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $news->title }}</h5>
                <p class="card-text">{{ Str::limit($news->content, 100) }}</p>
                <div class="mt-auto d-flex justify-content-between">
                    <a href="{{ route('admin.news.edit', $news->id) }}" class="btn btn-warning btn-sm">แก้ไข</a>
                    <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST" onsubmit="return confirm('ยืนยันการลบข่าวนี้?')">
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
        <div class="alert alert-info text-center">ยังไม่มีข่าว</div>
    </div>
    @endforelse
</div>
@endsection
