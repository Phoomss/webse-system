@php
    $staffList = [
        [
            'name' => 'ผศ.ดร.อุษณีย์ ภักดีตระกูลวงศ์',
            'position' => 'ประธานฯ สาขาวิชา',
            'email' => '',
            'imageUrl' => 'https://sc.npru.ac.th/sc_major/assets/images/lecturer/1706694016_43d4f45dca2d4f9011a4.jpg',
        ],
        [
            'name' => 'ผศ.ดร. วรเชษฐ์ อุทธา',
            'position' => 'รองประธานสาขา (ประธานสาขา)',
            'email' => '',
            'imageUrl' => 'https://sc.npru.ac.th/sc_major/assets/images/lecturer/1706693986_c5a3e8541b6f087048fa.jpg',
        ],
        [
            'name' => 'ผศ.สมเกียรติ ช่อเหมือน',
            'position' => 'รองประธานฯ ฝ่ายนโยบายและแผน',
            'email' => '',
            'imageUrl' => 'https://sc.npru.ac.th/sc_major/assets/images/lecturer/1706694064_e094c4d933ac0ed7cd03.jpg',
        ],
        [
            'name' => 'ผศ.นฤพล สุวรรณวิจิตร',
            'position' => 'รองประธานฯ ฝ่ายประกันคุณภาพฯ',
            'email' => '',
            'imageUrl' => 'https://sc.npru.ac.th/sc_major/assets/images/lecturer/1716485261_38d6e57b8d63fe377d25.jpg',
        ],
        [
            'name' => 'อาจารย์ ดร.สุพิฌาย์ จันทร์เรือง',
            'position' => 'รองประธานฯ ฝ่ายกิจการนักศึกษา',
            'email' => '',
            'imageUrl' => 'https://sc.npru.ac.th/sc_major/assets/images/lecturer/1706694139_d6a2ba899f7470f5fd45.png',
        ],
        [
            'name' => 'อาจารย์สมหมาย กรังพานิช',
            'position' => 'กรรมการผู้จัดการ บริษัท พี เอ็น พี โซลูชั่น จำกัด และกรรมก',
            'email' => '',
            'imageUrl' => 'https://sc.npru.ac.th/sc_major/assets/images/lecturer/1706697016_17296e0d4cca0c92558f.jpg',
        ],
    ];
@endphp

<div class="container">
    <h1 class="text-center text-danger fw-bold mb-5">คณะกรรมการสาขาวิศวกรรมซอฟต์แวร์</h1>

    <div class="row g-4">
        @foreach ($staffList as $staff)
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 position-relative overflow-hidden">

                    <!-- รูปวงกลม -->
                    <div class="position-relative text-center mt-4">
                        <img src="{{ $staff['imageUrl'] }}" class="rounded-circle border border-3 border-white shadow-sm"
                            alt="{{ $staff['name'] }}" style="width: 120px; height: 120px; object-fit: cover;">
                    </div>

                    <div class="card-body text-center pt-5">
                        <h5 class="card-title text-danger fw-bold">{{ $staff['name'] }}</h5>
                        <p class="card-text text-secondary">{{ $staff['position'] }}</p>
                        @if ($staff['email'])
                            <p class="text-muted small">{{ $staff['email'] }}</p>
                        @endif
                    </div>

                    <!-- Hover effect overlay -->
                    <div
                        class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-to-bottom opacity-0 hover-opacity-25 transition">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<style>
    .card:hover {
        transform: translateY(-8px);
        transition: transform 0.3s;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }
</style>
