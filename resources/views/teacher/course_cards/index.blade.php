@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">จัดการการ์ดหลักสูตร</h1>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('teacher.course_cards.create') }}" class="btn btn-primary">เพิ่มการ์ดใหม่</a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">รายการการ์ดหลักสูตร</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>ชื่อ (ไทย)</th>
                                    <th>ชื่อ (อังกฤษ)</th>
                                    <th>ลำดับ</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courseCards as $index => $courseCard)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $courseCard->title_thai ?? '-' }}</td>
                                    <td>{{ $courseCard->title_english ?? '-' }}</td>
                                    <td>{{ $courseCard->order ?? '-' }}</td>
                                    <td>
                                        <a href="{{ route('teacher.course_cards.edit', $courseCard) }}" class="btn btn-sm btn-warning">แก้ไข</a>
                                        <form action="{{ route('teacher.course_cards.destroy', $courseCard) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการลบการ์ดนี้ใช่หรือไม่?')">ลบ</button>
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