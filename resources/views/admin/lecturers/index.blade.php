@extends('layouts.admin.admin')

@section('content')
<h1 class="mb-4">จัดการอาจารย์</h1>

<div class="mb-3">
    <a href="{{ route('admin.lecturers.create') }}" class="btn btn-primary">+ เพิ่มอาจารย์</a>
</div>

<div class="row">
    @forelse($lecturers as $lecturer)
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm text-center lecturer-card">
            <img src="{{ $lecturer->image ?? 'https://via.placeholder.com/150' }}"
                 class="card-img-top rounded-circle mx-auto mt-3" style="width:120px; height:120px; object-fit:cover;"
                 alt="{{ $lecturer->name }}">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-danger fw-bold">{{ $lecturer->name }}</h5>
                <p class="card-text text-secondary">{{ $lecturer->position }}</p>
                @if($lecturer->email)
                <p class="text-muted small">{{ $lecturer->email }}</p>
                @endif
                <div class="mt-auto d-flex justify-content-between">
                    <a href="{{ route('admin.lecturers.edit', $lecturer->id) }}" class="btn btn-warning btn-sm">แก้ไข</a>
                    <form action="{{ route('admin.lecturers.destroy', $lecturer->id) }}" method="POST"
                          onsubmit="return confirm('ยืนยันการลบอาจารย์นี้?')">
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
        <div class="alert alert-info text-center">ยังไม่มีข้อมูลอาจารย์</div>
    </div>
    @endforelse
</div>
@endsection

@push('styles')
<style>
.lecturer-card {
    transition: transform 0.3s, box-shadow 0.3s;
    cursor: pointer;
}
.lecturer-card:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 1.5rem 3rem rgba(0,0,0,0.25) !important;
}
</style>
@endpush
