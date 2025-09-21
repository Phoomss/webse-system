<section class="py-5 px-4">

    {{-- หัวข้อหลัก --}}
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-danger mb-3">ประวัติและการพัฒนาหลักสูตร</h1>
        <div class="mx-auto bg-danger rounded-pill" style="height:4px; width:5rem;"></div>
    </div>

    {{-- ส่วนเนื้อหาประวัติ --}}
    <div class="container mb-5">
        <div class="bg-white p-4 p-md-5 rounded-3 shadow-sm">
            <p>{{ $about->history ?? 'ยังไม่มีข้อมูลประวัติ' }}</p>
        </div>
    </div>

    {{-- ส่วน ปรัชญา ปณิธาน วิสัยทัศน์ --}}
    <div class="container">
        <div class="row g-4">

            {{-- ปรัชญา --}}
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title text-danger mb-3">ปรัชญา</h5>
                        <p class="card-text text-muted">
                            {{ $about->philosophy ?? 'ยังไม่มีข้อมูลปรัชญา' }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- ปณิธาน --}}
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title text-danger mb-3">ปณิธาน</h5>
                        <p class="card-text text-muted">
                            {{ $about->mission ?? 'ยังไม่มีข้อมูลปณิธาน' }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- วิสัยทัศน์ --}}
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <h5 class="card-title text-danger mb-3">วิสัยทัศน์</h5>
                        <p class="card-text text-muted">
                            {{ $about->vision ?? 'ยังไม่มีข้อมูลวิสัยทัศน์' }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
