@extends('layouts.admin.admin')

@section('content')
    <h1 class="mb-4">จัดการห้องปฏิบัติการ</h1>

    <div class="mb-3">
        <a href="{{ route('admin.classrooms.create') }}" class="btn btn-primary">
            + เพิ่มห้องปฏิบัติการ
        </a>

    </div>

    <div class="row">
        @forelse($classrooms as $classroom)
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card h-100 shadow-lg rounded-4 overflow-hidden classroom-card">
                    <img src="{{ $classroom->img }}" class="card-img-top" alt="{{ $classroom->title }}"
                        style="height: 180px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center fw-bold">{{ $classroom->title }}</h5>
                        <div class="mt-auto d-flex justify-content-between">
                            <a href="{{ route('admin.classrooms.edit', $classroom->id) }}"
                                class="btn btn-warning btn-sm">แก้ไข</a>
                            <form action="{{ route('admin.classrooms.destroy', $classroom->id) }}" method="POST"
                                onsubmit="return confirm('ยืนยันการลบห้องปฏิบัติการนี้?')">
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
                <div class="alert alert-info text-center">
                    ยังไม่มีข้อมูลห้องปฏิบัติการ
                </div>
            </div>
        @endforelse
    </div>
@endsection

@push('styles')
    <style>
        .classroom-card {
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .classroom-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 1.5rem 3rem rgba(0, 0, 0, 0.25) !important;
        }
    </style>
@endpush
