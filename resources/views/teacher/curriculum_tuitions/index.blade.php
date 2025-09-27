@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">จัดการหลักสูตรและค่าเทอม</h1>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('teacher.curriculum_tuitions.create') }}" class="btn btn-primary">เพิ่มข้อมูลใหม่</a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">รายการหลักสูตรและค่าเทอม</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>ชื่อ (ไทย)</th>
                                    <th>ชื่อ (อังกฤษ)</th>
                                    <th>สถานะ</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($curriculumTuition as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->title_thai ?? '-' }}</td>
                                    <td>{{ $item->title_english ?? '-' }}</td>
                                    <td>
                                        @if($item->is_active)
                                            <span class="badge bg-success">เปิดใช้งาน</span>
                                        @else
                                            <span class="badge bg-secondary">ปิดใช้งาน</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('teacher.curriculum_tuitions.edit', $item) }}" class="btn btn-sm btn-warning">แก้ไข</a>
                                        <form action="{{ route('teacher.curriculum_tuitions.destroy', $item) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไม่?')">ลบ</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection