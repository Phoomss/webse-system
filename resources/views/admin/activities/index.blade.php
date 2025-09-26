@extends('layouts.admin.admin')

@section('content')
<h1 class="mb-4">จัดการกิจกรรม</h1>
<a href="{{ route('admin.activities.create') }}" class="btn btn-primary mb-3">+ เพิ่มกิจกรรม</a>

<div class="row">
    @forelse($activities as $activity)
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm text-center">
            <img src="{{ $activity->image ?? 'https://via.placeholder.com/150' }}"
                 class="card-img-top rounded mx-auto mt-3" style="width:120px; height:120px; object-fit:cover;">
            <div class="card-body">
                <h5 class="card-title text-danger">{{ $activity->title }}</h5>
                <p class="text-secondary">{{ $activity->description }}</p>
                <p class="text-muted">{{ $activity->date }}</p>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.activities.edit', $activity->id) }}" class="btn btn-warning btn-sm">แก้ไข</a>
                    <form action="{{ route('admin.activities.destroy', $activity->id) }}" method="POST" onsubmit="return confirm('ยืนยันการลบ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">ลบ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12"><div class="alert alert-info text-center">ยังไม่มีกิจกรรม</div></div>
    @endforelse
</div>
@endsection
