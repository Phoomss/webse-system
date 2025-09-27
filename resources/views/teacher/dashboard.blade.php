@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">แดชบอร์ดอาจารย์</h1>

    <div class="row">
        <!-- Stats Cards -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">ข่าวสาร</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $newsCount ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">กิจกรรม</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $activitiesCount ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">วิดีโอ</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $videosCount ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-video fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">สไลด์หน้าแรก</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $slidesCount ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-image fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">หลักสูตร</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $coursesCount ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">การ์ดหลักสูตร</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $courseCardsCount ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-id-card fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-light shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-light text-uppercase mb-1">หลักสูตร/ค่าเทอม</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $curriculumTuitionsCount ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">รวมโพสต์</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalPostsCount ?? 0 }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-edit fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Recent Posts -->
        <div class="col-lg-8 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">โพสต์ล่าสุด</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ประเภท</th>
                                    <th>ชื่อ</th>
                                    <th>วันที่โพสต์</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($recentCombined) && $recentCombined->count() > 0)
                                    @foreach($recentCombined as $post)
                                    <tr>
                                        <td>{{ $post['type'] }}</td>
                                        <td>{{ strlen($post['name']) > 30 ? substr($post['name'], 0, 30) . '...' : $post['name'] }}</td>
                                        <td>{{ $post['date'] }}</td>
                                        <td>
                                            <a href="{{ route($post['route'], $post['id']) }}" class="btn btn-sm btn-warning">แก้ไข</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">ไม่มีข้อมูลโพสต์ล่าสุด</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">การดำเนินการด่วน</h6>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="{{ route('teacher.news.create') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-plus-circle text-primary"></i> เพิ่มข่าวใหม่
                        </a>
                        <a href="{{ route('teacher.activities.create') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-calendar-plus text-success"></i> เพิ่มกิจกรรมใหม่
                        </a>
                        <a href="{{ route('teacher.videos.create') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-plus-circle text-info"></i> เพิ่มวิดีโอใหม่
                        </a>
                        <a href="{{ route('teacher.hero_slides.create') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-image text-warning"></i> เพิ่มสไลด์หน้าใหม่
                        </a>
                        <a href="{{ route('teacher.courses.create') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-graduation-cap text-secondary"></i> เพิ่มหลักสูตรใหม่
                        </a>
                        <a href="{{ route('teacher.course_cards.create') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-id-card text-dark"></i> เพิ่มการ์ดหลักสูตรใหม่
                        </a>
                        <a href="{{ route('teacher.curriculum_tuitions.create') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-book text-light"></i> เพิ่มหลักสูตร/ค่าเทอมใหม่
                        </a>
                        <a href="{{ route('teacher.profile.edit') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-user-edit text-danger"></i> แก้ไขข้อมูลส่วนตัว
                        </a>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">ข้อมูลบัญชี</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            ชื่อผู้ใช้
                            <span class="badge bg-primary rounded-pill">{{ auth()->user()->name }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            บทบาท
                            <span class="badge bg-success rounded-pill">{{ auth()->user()->role }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            อีเมล
                            <span class="badge bg-info rounded-pill">{{ auth()->user()->email }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            วันที่ลงทะเบียน
                            <span class="badge bg-secondary rounded-pill">{{ auth()->user()->created_at->format('d/m/Y') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection