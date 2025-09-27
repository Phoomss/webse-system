@extends('layouts.admin.admin')

@section('title', 'จัดการข้อมูลหลักสูตร')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">จัดการข้อมูลหลักสูตร</h1>
        <a href="{{ route('admin.courses.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> เพิ่มข้อมูลหลักสูตร
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ชื่อหลักสูตร (ไทย)</th>
                            <th>ชื่อหลักสูตร (อังกฤษ)</th>
                            <th>ปริญญา (ไทย)</th>
                            <th>จำนวนหน่วยกิต</th>
                            <th>การจัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->title_thai ?? '-' }}</td>
                            <td>{{ $course->title_english ?? '-' }}</td>
                            <td>{{ $course->degree_thai_full ?? '-' }}</td>
                            <td>{{ $course->total_credits ?? '-' }}</td>
                            <td>
                                <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-warning btn-sm">แก้ไข</a>
                                <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" class="d-inline" onsubmit="return confirm('ยืนยันการลบข้อมูลหลักสูตร?')">
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