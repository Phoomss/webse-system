@extends('layouts.admin.admin')

@section('content')
<h1 class="mb-4">จัดการ Hero Slide</h1>

<div class="mb-3">
    <a href="{{ route('admin.hero_slides.create') }}" class="btn btn-primary">+ เพิ่มสไลด์</a>
</div>

<div class="row">
    @forelse($slides as $slide)
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card shadow-sm">
            <img src="{{ $slide->image }}" class="card-img-top" style="height:200px;object-fit:cover;" alt="{{ $slide->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $slide->title ?? 'ไม่มีชื่อ' }}</h5>
                <p class="card-text text-muted">{{ $slide->subtitle }}</p>
                @if($slide->link)
                    <p><a href="{{ $slide->link }}" target="_blank" class="small">ดูเพิ่มเติม</a></p>
                @endif
                <p class="text-muted">ลำดับ: {{ $slide->order }}</p>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.hero_slides.edit', $slide->id) }}" class="btn btn-warning btn-sm">แก้ไข</a>
                    <form action="{{ route('admin.hero_slides.destroy', $slide->id) }}" method="POST" onsubmit="return confirm('ยืนยันการลบสไลด์นี้?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">ลบ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <div class="alert alert-info text-center">ยังไม่มีสไลด์</div>
    </div>
    @endforelse
</div>
@endsection
