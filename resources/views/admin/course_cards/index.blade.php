@extends('layouts.admin.admin')

@section('title', 'จัดการการ์ดหลักสูตร')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">จัดการการ์ดหลักสูตร</h1>
        <a href="{{ route('admin.course_cards.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> เพิ่มการ์ดหลักสูตร
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>ชื่อการ์ด (ไทย)</th>
                            <th>ชื่อการ์ด (อังกฤษ)</th>
                            <th>ไอคอน</th>
                            <th>การจัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courseCards as $courseCard)
                        <tr>
                            <td>{{ $courseCard->order }}</td>
                            <td>{{ $courseCard->title_thai ?? '-' }}</td>
                            <td>{{ $courseCard->title_english ?? '-' }}</td>
                            <td>{{ $courseCard->icon_class ?? '-' }}</td>
                            <td>
                                <a href="{{ route('admin.course_cards.edit', $courseCard->id) }}" class="btn btn-warning btn-sm">แก้ไข</a>
                                <form action="{{ route('admin.course_cards.destroy', $courseCard->id) }}" method="POST" class="d-inline" onsubmit="return confirm('ยืนยันการลบการ์ดหลักสูตร?')">
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