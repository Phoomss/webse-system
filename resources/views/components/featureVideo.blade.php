@php
$videoList = [
    [
        'id' => 1,
        'title' => 'วิดีโอนำเสนอหลักสูตรวิศวกรรมซอฟต์แวร์ 1',
        'url' => 'https://www.youtube.com/embed/BCyOqIaEUQE?start=128',
    ],
    [
        'id' => 2,
        'title' => 'วิดีโอนำเสนอหลักสูตรวิศวกรรมซอฟต์แวร์ 2',
        'url' => 'https://www.youtube.com/embed/jXyZb58_eMo',
    ],
];
@endphp

{{-- หัวข้อหลัก --}}
<div class="text-center mb-5">
    <p class="text-uppercase text-secondary small mb-2">SE Presentation</p>
    <h1 class="display-5 fw-bold text-danger mb-2">
        วิดีโอนำเสนอสาขาวิศวกรรมซอฟต์แวร์
    </h1>
    <div class="bg-danger mx-auto rounded-pill" style="height:4px; width:6rem;"></div>
</div>

{{-- วิดีโอ --}}
<div class="container">
    <div class="row g-4">
        @foreach ($videoList as $video)
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <div class="ratio ratio-16x9 rounded-3 shadow-lg overflow-hidden"
                 data-aos="fade-up">
                <iframe
                    src="{{ $video['url'] }}" 
                    title="{{ $video['title'] }}"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- AOS JS --}}
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000 });
</script>
