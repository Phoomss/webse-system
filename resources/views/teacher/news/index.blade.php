@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">จัดการข่าวสาร</h1>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('teacher.news.create') }}" class="btn btn-primary">เพิ่มข่าวใหม่</a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">รายการข่าวสาร</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>หัวข้อ</th>
                                    <th>วันที่โพสต์</th>
                                    <th>สถานะ</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($newsList as $index => $news)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $news->title }}</td>
                                    <td>{{ $news->created_at->format('d/m/Y') }}</td>
                                    <td>
                                        <span class="badge bg-success">เผยแพร่</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('teacher.news.edit', $news) }}" class="btn btn-sm btn-warning">แก้ไข</a>
                                        <form action="{{ route('teacher.news.destroy', $news) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการลบข่าวนี้ใช่หรือไม่?')">ลบ</button>
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