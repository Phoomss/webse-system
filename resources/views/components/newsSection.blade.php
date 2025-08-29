@php
$newsList = [
    [
        'id' => 1,
        'title' => 'เปิดคอร์สใหม่ด้าน AI',
        'description' => 'สาขา SE เปิดคอร์ส AI ใหม่สำหรับนักศึกษาและบุคคลทั่วไป สนใจสมัครเรียนได้แล้ววันนี้',
        'date' => '2025-08-29',
        'imageUrl' => 'hero1.png',
    ],
    [
        'id' => 2,
        'title' => 'ประกาศรับสมัครนักศึกษาใหม่',
        'description' => 'เปิดรับสมัครนักศึกษาใหม่ปีการศึกษา 2025 พร้อมรายละเอียดการสมัครและค่าเทอม',
        'date' => '2025-08-20',
        'imageUrl' => 'hero2.png',
    ],
    [
        'id' => 3,
        'title' => 'กิจกรรม Hackathon 2025',
        'description' => 'นักศึกษาสาขา SE เข้าร่วมกิจกรรม Hackathon และคว้ารางวัลชนะเลิศ',
        'date' => '2025-08-15',
        'imageUrl' => 'hero3.png',
    ],
    [
        'id' => 4,
        'title' => 'สัมมนาเทคโนโลยี Cloud',
        'description' => 'เชิญร่วมสัมมนา Cloud Computing ฟรีสำหรับนักศึกษาและบุคคลทั่วไป',
        'date' => '2025-08-10',
        'imageUrl' => 'hero1.png',
    ],
    [
        'id' => 5,
        'title' => 'Workshop การเขียนโปรแกรม',
        'description' => 'กิจกรรม Workshop สำหรับนักศึกษา SE ทุกชั้นปี เรียนรู้การเขียนโปรแกรมแบบมืออาชีพ',
        'date' => '2025-08-05',
        'imageUrl' => 'hero2.png',
    ],
    [
        'id' => 6,
        'title' => 'แข่งขัน Coding Challenge',
        'description' => 'นักศึกษาสาขา SE เข้าร่วมแข่งขัน Coding Challenge และได้รับรางวัล',
        'date' => '2025-08-01',
        'imageUrl' => 'hero3.png',
    ],
];
@endphp

{{-- หัวข้อหลัก --}}
<div class="text-center mb-5">
    <p class="text-uppercase text-secondary small mb-2">SE News</p>
    <h1 class="display-5 fw-bold text-danger mb-2">ข่าวประชาสัมพันธ์</h1>
    <div class="bg-danger mx-auto rounded-pill" style="height:4px; width:6rem;"></div>
</div>

{{-- รายการข่าว --}}
<div class="container">
    <div class="row g-4">
        @foreach ($newsList as $news)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow" data-aos="fade-left">
                <img src="{{ asset('storage/' . $news['imageUrl']) }}" class="card-img-top" alt="{{ $news['title'] }}" style="height:12rem; object-fit:cover;">
                <div class="card-body">
                    <p class="text-muted small mb-1">{{ $news['date'] }}</p>
                    <h5 class="card-title text-danger mb-2">{{ $news['title'] }}</h5>
                    <p class="card-text text-secondary">{{ $news['description'] }}</p>
                    <a href="#" class="text-danger fw-semibold text-decoration-none">อ่านเพิ่มเติม →</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- ปุ่มดูข่าวทั้งหมด --}}
<div class="text-center mt-4">
    <a href="/news-activities" class="btn btn-danger btn-lg rounded-pill px-5">
        ดูข่าวทั้งหมด
    </a>
</div>

{{-- CSS เล็ก ๆ สำหรับ hover shadow --}}
<style>
.hover-shadow:hover {
    box-shadow: 0 1rem 3rem rgba(0,0,0,0.3) !important;
    transition: all 0.3s ease;
}
</style>
