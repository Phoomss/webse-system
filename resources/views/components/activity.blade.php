@php
$activities = [
    [
        'id' => 1,
        'title' => 'โครงการพัฒนาทักษะโปรแกรมเมอร์',
        'date' => '15 เมษายน 2568',
        'description' => 'จัดอบรมทักษะเขียนโปรแกรมขั้นสูงสำหรับนักศึกษา SE ชั้นปีที่ 3-4',
        'imageUrl' => 'activity1.jpg',
    ],
    [
        'id' => 2,
        'title' => 'แข่งขันเขียนโปรแกรม (Hackathon)',
        'date' => '22 เมษายน 2568',
        'description' => 'ขอเชิญนักศึกษาทุกชั้นปีเข้าร่วมการแข่งขันพัฒนาแอปพลิเคชันใน 24 ชั่วโมง',
        'imageUrl' => 'activity2.jpg',
    ],
    [
        'id' => 3,
        'title' => 'ศึกษาดูงานบริษัทซอฟต์แวร์',
        'date' => '2 พฤษภาคม 2568',
        'description' => 'ศึกษาดูงานการพัฒนาซอฟต์แวร์ ณ บริษัทชั้นนำในกรุงเทพมหานคร',
        'imageUrl' => 'activity3.jpg',
    ],
];
@endphp

{{-- หัวข้อหลัก --}}
<div class="text-center mb-5">
    <p class="text-uppercase text-secondary small mb-2">SE Activity</p>
    <h1 class="display-5 fw-bold text-danger mb-2">กิจกรรม</h1>
    <div class="bg-danger mx-auto rounded-pill" style="height:4px; width:6rem;"></div>
</div>

{{-- รายการกิจกรรม --}}
<div class="container">
    <div class="row g-4">
        @foreach ($activities as $activity)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <img src="{{ asset('storage/' . $activity['imageUrl']) }}" class="card-img-top" alt="{{ $activity['title'] }}" style="height:12rem; object-fit:cover;">
                <div class="card-body">
                    <p class="text-muted small mb-1">{{ $activity['date'] }}</p>
                    <h5 class="card-title text-danger mb-2">{{ $activity['title'] }}</h5>
                    <p class="card-text text-secondary">{{ $activity['description'] }}</p>
                    <a href="#" class="text-danger fw-semibold text-decoration-none">ดูรายละเอียด →</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- ปุ่มดูทั้งหมด --}}
<div class="text-center mt-4">
    <a href="/news-activities" class="btn btn-danger btn-lg rounded-pill px-5">
        ดูกิจกรรมทั้งหมด
    </a>
</div>
