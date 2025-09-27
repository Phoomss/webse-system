@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">ข้อมูลส่วนตัว</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">รายละเอียดข้อมูลส่วนตัว</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://i.pravatar.cc/150?u={{ $user->id }}" alt="Profile Picture" class="img-fluid rounded-circle">
                        </div>
                        <div class="col-md-9">
                            <table class="table table-borderless">
                                <tr>
                                    <th>ชื่อ-นามสกุล:</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>อีเมล:</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>โทรศัพท์:</th>
                                    <td>{{ $user->phone ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>ชื่อเล่น:</th>
                                    <td>{{ $user->nickname ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>บทบาท:</th>
                                    <td>{{ $user->role }}</td>
                                </tr>
                                <tr>
                                    <th>วันที่สมัคร:</th>
                                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('teacher.profile.edit') }}" class="btn btn-primary">แก้ไขข้อมูล</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection