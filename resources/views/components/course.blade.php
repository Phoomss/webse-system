@props(['course' => null])

<div class="text-start mb-5">
    <h1 class="display-5 fw-bold text-danger mb-3">
        {{ $course?->title_thai ?? 'หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิศวกรรมซอฟต์แวร์' }}
    </h1>
    <div class="mx-auto mb-4" style="width:100%; height:4px; background-color:#C70039;"></div>
</div>

{{-- Grid 6-6 --}}
<div class="row g-4 align-items-start">
    {{-- ซ้าย 6 ส่วน --}}
    <div class="col-12 col-md-6">
        {{-- ข้อมูลทั่วไป --}}
        <div class="mb-4">
            <h2 class="h5 text-danger mb-3">ข้อมูลทั่วไป</h2>
            <div class="text-secondary">
                <p><strong>ภาษาไทย:</strong> {{ $course?->title_thai ?? 'หลักสูตรวิทยาศาสตร์บัณฑิต สาขาวิชาวิศวกรรมซอฟต์แวร์' }}</p>
                <p><strong>ภาษาอังกฤษ:</strong> {{ $course?->title_english ?? 'Bachelor of Science (Software Engineering)' }}</p>
            </div>
        </div>

        {{-- ชื่อปริญญาและสาขาวิชา --}}
        <div>
            <h2 class="h5 text-danger mb-3">ชื่อปริญญาและสาขาวิชา</h2>
            <div class="row g-3 text-secondary">
                <div class="col-12 col-md-6">
                    <p><strong>ชื่อเต็ม (ไทย):</strong> {{ $course?->degree_thai_full ?? 'วิทยาศาสตร์บัณฑิต สาขาวิชาวิศวกรรมซอฟต์แวร์' }}</p>
                </div>
                <div class="col-12 col-md-6">
                    <p><strong>ชื่อย่อ (ไทย):</strong> {{ $course?->degree_thai_short ?? 'วท.บ. (วิศวกรรมซอฟต์แวร์)' }}</p>
                </div>
                <div class="col-12 col-md-6">
                    <p><strong>ชื่อเต็ม (อังกฤษ):</strong> {{ $course?->degree_english_full ?? 'Bachelor of Science (Software Engineering)' }}</p>
                </div>
                <div class="col-12 col-md-6">
                    <p><strong>ชื่อย่อ (อังกฤษ):</strong> {{ $course?->degree_english_short ?? 'B.Sc. (Software Engineering)' }}</p>
                </div>
                <div class="col-12">
                    <p><strong>จำนวนหน่วยกิตที่เรียนตลอดหลักสูตร:</strong> {{ $course?->total_credits ?? '145' }} หน่วยกิต</p>
                </div>
            </div>
        </div>
    </div>

    {{-- ขวา 6 ส่วน --}}
    <div class="col-12 col-md-6">
        <div class="rounded shadow overflow-hidden">
            <img src="{{ $course && $course->image_path ? asset($course->image_path) : asset('storage/imageBarcher.png') }}" alt="แผนภาพหลักสูตร"
                class="img-fluid rounded">
        </div>
    </div>
</div>