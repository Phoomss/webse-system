<section class="py-5 px-4">
    {{-- Heading --}}
    <div class="text-center mb-5">
        <p class="text-uppercase text-muted mb-2" style="letter-spacing:2px;">SE News & Activities</p>
        <h1 class="display-5 fw-bold text-danger mb-3">ข่าวสารและกิจกรรม</h1>
        <div class="mx-auto bg-danger rounded-pill" style="height:4px; width:5rem;"></div>
    </div>

    <div class="container">

        {{-- ข่าวประชาสัมพันธ์ --}}
        <section class="mb-5">
            <h2 class="h4 fw-bold text-danger mb-4">ข่าวประชาสัมพันธ์</h2>
            <div class="row g-4">
                @foreach(range(1,3) as $item)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 hover-shadow" style="transition: transform 0.3s;">
                        <img src="/news.jpg" class="card-img-top" alt="ข่าวสาร">
                        <div class="card-body">
                            <h5 class="card-title text-dark">หัวข้อข่าว {{ $item }}</h5>
                            <p class="card-text text-muted small">
                                เนื้อหาสรุปสั้น ๆ ของข่าวที่เกี่ยวข้องกับสาขา เช่น ประกาศทุนการศึกษา หรืออบรมต่าง ๆ...
                            </p>
                            <a href="#" class="text-danger fw-semibold text-decoration-none">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        {{-- กิจกรรมที่ผ่านมา --}}
        <section>
            <h2 class="h4 fw-bold text-danger mb-4">กิจกรรมที่ผ่านมา</h2>
            <div class="row g-4">
                @foreach(range(1,3) as $item)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 hover-shadow" style="transition: transform 0.3s;">
                        <img src="/activity.jpg" class="card-img-top" alt="กิจกรรม">
                        <div class="card-body">
                            <h5 class="card-title text-dark">หัวข้อกิจกรรม {{ $item }}</h5>
                            <p class="card-text text-muted small">
                                รายละเอียดกิจกรรมสั้น ๆ เช่น กิจกรรมอบรม Workshop พัฒนาทักษะนักศึกษา ฯลฯ
                            </p>
                            <a href="#" class="text-danger fw-semibold text-decoration-none">ดูรูปภาพกิจกรรม</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

    </div>
</section>

{{-- Optional CSS สำหรับ hover effect --}}
<style>
.hover-shadow:hover {
    transform: scale(1.05);
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15) !important;
}
</style>
