@extends('layouts.admin.admin')

@section('content')
    <h1 class="mb-4 fw-bold">จัดการข้อมูลเกี่ยวกับสาขา</h1>

    <div class="mb-3">
        <a href="{{ route('admin.abouts.create') }}" class="btn btn-primary shadow-sm">
            + เพิ่มข้อมูล
        </a>
    </div>

    @forelse($abouts as $about)
        <div class="card mb-4 shadow-sm rounded-4">
            <div class="card-body">
                <h5 class="fw-bold text-primary">History</h5>
                <p>{{ $about->history }}</p>

                <h5 class="fw-bold text-primary">Philosophy</h5>
                <p>{{ $about->philosophy }}</p>

                <h5 class="fw-bold text-primary">Mission</h5>
                <p>{{ $about->mission }}</p>

                <h5 class="fw-bold text-primary">Vision</h5>
                <p>{{ $about->vision }}</p>

                <div class="d-flex justify-content-end gap-2 mt-3">
                    <a href="{{ route('admin.abouts.edit', $about->id) }}" class="btn btn-warning btn-sm">แก้ไข</a>
                    <form action="{{ route('admin.abouts.destroy', $about->id) }}" method="POST"
                        onsubmit="return confirm('ยืนยันการลบข้อมูลนี้?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">ลบ</button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-info text-center">ยังไม่มีข้อมูลเกี่ยวกับสาขา</div>
    @endforelse
@endsection
