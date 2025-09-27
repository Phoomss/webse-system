@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">จัดการกิจกรรม</h1>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('teacher.activities.create') }}" class="btn btn-primary">เพิ่มกิจกรรมใหม่</a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">รายการกิจกรรม</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>หัวข้อ</th>
                                    <th>วันที่จัด</th>
                                    <th>สถานะ</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($activities as $index => $activity)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $activity->title }}</td>
                                    <td>{{ $activity->date ? \Carbon\Carbon::parse($activity->date)->format('d/m/Y') : '-' }}</td>
                                    <td>
                                        <span class="badge bg-success">เผยแพร่</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('teacher.activities.edit', $activity) }}" class="btn btn-sm btn-warning">แก้ไข</a>
                                        <form action="{{ route('teacher.activities.destroy', $activity) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการลบกิจกรรมนี้ใช่หรือไม่?')">ลบ</button>
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