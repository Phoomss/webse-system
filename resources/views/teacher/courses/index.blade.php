@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">จัดการหลักสูตร</h1>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('teacher.courses.create') }}" class="btn btn-primary">เพิ่มหลักสูตรใหม่</a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">รายการหลักสูตร</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>ชื่อหลักสูตร (ไทย)</th>
                                    <th>ชื่อหลักสูตร (อังกฤษ)</th>
                                    <th>หน่วยกิต</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $index => $course)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $course->title_thai ?? '-' }}</td>
                                    <td>{{ $course->title_english ?? '-' }}</td>
                                    <td>{{ $course->total_credits ?? '-' }}</td>
                                    <td>
                                        <a href="{{ route('teacher.courses.edit', $course) }}" class="btn btn-sm btn-warning">แก้ไข</a>
                                        <form action="{{ route('teacher.courses.destroy', $course) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการลบหลักสูตรนี้ใช่หรือไม่?')">ลบ</button>
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