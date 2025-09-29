{{-- หัวข้อหลัก --}}
<div class="text-center mb-5">
    <p class="text-uppercase text-secondary small mb-2">SE Presentation</p>
    <h1 class="display-5 fw-bold text-danger mb-2">
        วิดีโอนำเสนอสาขาวิศวกรรมซอฟต์แวร์
    </h1>
    <div class="bg-danger mx-auto rounded-pill" style="height:4px; width:6rem;"></div>
</div>

{{-- DEBUG: เช็คข้อมูล --}}
{{-- {{ dd($videos) }} --}}

{{-- วิดีโอ --}}
<div class="container">
    <div class="row g-4">
        @forelse ($videos as $video)
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <div class="ratio ratio-16x9 rounded-3 shadow-lg overflow-hidden"
                data-aos="fade-up">
                <iframe
                    src="{{ $video->embed_url }}"
                    title="{{ $video->title }}"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        @empty
        <div class="col-12">
            <p class="text-center text-muted">ยังไม่มีวิดีโอ</p>
        </div>
        @endforelse
    </div>
</div>

{{-- AOS Animation --}}
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>