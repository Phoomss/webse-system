{{-- หัวข้อหลัก --}}
<div class="text-center mt-5">
    <h1 class="display-5 fw-bold text-danger mb-3">ห้องปฏิบัติการ</h1>
    <div class="mx-auto bg-gradient rounded-pill" style="height:4px; width:5rem;"></div>
</div>

{{-- Card Grid --}}
<div class="container">
    <div class="row g-4">

        @php
            $classrooms = [
                [
                    'title' => 'อาคารปฏิบัติการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏนครปฐม',
                    'img' =>
                        'https://sc.npru.ac.th/sc_major/assets/images/laboratory/1706695830_4cfc50904539177efe52.jpg',
                ],
                [
                    'title' => 'ห้องปฏิบัติการคอมพิวเตอร์ C408',
                    'img' =>
                        'https://sc.npru.ac.th/sc_major/assets/images/laboratory/1706696144_9c9da38b4de6b2f98859.jpg',
                ],
                [
                    'title' => 'ห้องปฏิบัติการคอมพิวเตอร์ C409',
                    'img' =>
                        'https://sc.npru.ac.th/sc_major/assets/images/laboratory/1706696156_5feb9ba120f4489dd75b.jpg',
                ],
                [
                    'title' => 'อาคารปฏิบัติการคอมพิวเตอร์',
                    'img' =>
                        'https://sc.npru.ac.th/sc_major/assets/images/laboratory/1706696068_17458c1c1b0af86cf5b1.jpg',
                ],
            ];
        @endphp

        @foreach ($classrooms as $room)
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 shadow-lg rounded-4 overflow-hidden classroom-card">
                    <img src="{{ $room['img'] }}" class="card-img-top object-fit-cover" alt="{{ $room['title'] }}">
                    <div class="card-body text-center">
                        <h5 class="card-title text-danger fw-bold">{{ $room['title'] }}</h5>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

<style>
    .classroom-card {
        transition: transform 0.3s, box-shadow 0.3s;
        cursor: pointer;
    }

    .classroom-card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 1.5rem 3rem rgba(0, 0, 0, 0.25) !important;
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .bg-gradient {
        background: linear-gradient(90deg, #C70039, #92002A);
    }
</style>
