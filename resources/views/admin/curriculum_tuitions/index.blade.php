@extends('layouts.admin.admin')

@section('title', 'จัดการข้อมูลหลักสูตรและค่าเทอม')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">จัดการข้อมูลหลักสูตรและค่าเทอม</h1>
        <a href="{{ route('admin.curriculum_tuitions.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> เพิ่มข้อมูลหลักสูตรและค่าเทอม
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ชื่อ (ไทย)</th>
                            <th>ชื่อ (อังกฤษ)</th>
                            <th>สถานะ</th>
                            <th>การจัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($curriculumTuition as $item)
                        <tr>
                            <td>{{ $item->title_thai ?? '-' }}</td>
                            <td>{{ $item->title_english ?? '-' }}</td>
                            <td>
                                <span class="badge {{ $item->is_active ? 'badge-success' : 'badge-secondary' }}">
                                    {{ $item->is_active ? 'ใช้งาน' : 'ไม่ใช้งาน' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('admin.curriculum_tuitions.edit', $item->id) }}" class="btn btn-warning btn-sm">แก้ไข</a>
                                <form action="{{ route('admin.curriculum_tuitions.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('ยืนยันการลบข้อมูลหลักสูตรและค่าเทอม?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">ลบ</button>
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
@endsection