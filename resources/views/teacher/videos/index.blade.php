@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">จัดการวิดีโอ</h1>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('teacher.videos.create') }}" class="btn btn-primary">เพิ่มวิดีโอใหม่</a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">รายการวิดีโอ</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>หัวข้อ</th>
                                    <th>ลิงก์</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($videos as $index => $video)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $video->title }}</td>
                                    <td>
                                        <a href="{{ $video->url }}" target="_blank">ดูวิดีโอ</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('teacher.videos.edit', $video) }}" class="btn btn-sm btn-warning">แก้ไข</a>
                                        <form action="{{ route('teacher.videos.destroy', $video) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการลบวิดีโอนี้ใช่หรือไม่?')">ลบ</button>
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