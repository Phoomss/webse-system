@props(['courseCards' => collect()])

{{-- หลักสูตรและคุณสมบัติผู้เข้าศึกษา --}}
<div class="p-4 p-md-5 text-white">

    {{-- หัวข้อหลัก --}}
    <div class="text-center mb-5">
        <h1 class="display-6 fw-bold mb-3">
            หลักสูตรและคุณสมบัติผู้เข้าศึกษา
        </h1>
        <div class="border-bottom border-4 border-white mx-auto mb-4" style="width:7rem;"></div>
    </div>

    {{-- การ์ดทั้งหมด --}}
    <div class="container">
        <div class="row g-4">
            @forelse($courseCards as $card)
            {{-- Card --}}
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card h-100 text-center shadow-lg border-0 bg-white hover-shadow"
                     style="transition: transform 0.3s;"
                     onmouseover="this.style.transform='scale(1.05)'; this.classList.add('bg-danger','text-white');"
                     onmouseout="this.style.transform='scale(1)'; this.classList.remove('bg-danger','text-white');">
                    <div class="card-body d-flex flex-column align-items-center">
                        <i class="bi {{ $card->icon_class ?? 'bi-mortarboard-fill' }} mb-3 text-danger" style="font-size:2rem;"></i>
                        <h5 class="card-title text-danger mb-3">{{ $card->title_thai ?? 'ชื่อการ์ด' }}</h5>
                        <ul class="list-unstyled text-danger lh-lg text-start">
                            @if($card->content_thai)
                                @php
                                    $contentItems = explode("\n", str_replace(["\r\n", "\r"], "\n", $card->content_thai));
                                    foreach($contentItems as $item) {
                                        if(trim($item)) {
                                            echo '<li>' . e(trim($item)) . '</li>';
                                        }
                                    }
                                @endphp
                            @else
                                <li>• ข้อมูลตัวอย่าง</li>
                            @endif
                        </ul>
                        @if($card->button_link)
                            <a href="{{ $card->button_link }}" class="btn btn-danger btn-lg rounded-pill px-4 mt-auto" target="_blank">
                                {{ $card->button_text_thai ?? 'ดูรายละเอียด' }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            {{-- Default cards as fallback if no data --}}
            {{-- Card 1 --}}
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card h-100 text-center shadow-lg border-0 bg-white hover-shadow"
                     style="transition: transform 0.3s;"
                     onmouseover="this.style.transform='scale(1.05)'; this.classList.add('bg-danger','text-white');"
                     onmouseout="this.style.transform='scale(1)'; this.classList.remove('bg-danger','text-white');">
                    <div class="card-body d-flex flex-column align-items-center">
                        <i class="bi bi-mortarboard-fill mb-3 text-danger" style="font-size:2rem;"></i>
                        <h5 class="card-title text-danger mb-3">รูปแบบหลักสูตร</h5>
                        <ul class="list-unstyled text-danger lh-lg text-start">
                            <li>• หลักสูตร 4 ปี ภาคปกติ</li>
                            <li>• เรียนการสอนเป็นภาษาไทย</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card h-100 text-center shadow-lg border-0 bg-white hover-shadow"
                     style="transition: transform 0.3s;"
                     onmouseover="this.style.transform='scale(1.05)'; this.classList.add('bg-danger','text-white');"
                     onmouseout="this.style.transform='scale(1)'; this.classList.remove('bg-danger','text-white');">
                    <div class="card-body d-flex flex-column align-items-center">
                        <i class="bi bi-person-check-fill mb-3 text-danger" style="font-size:2rem;"></i>
                        <h5 class="card-title text-danger mb-3">คุณสมบัติผู้สมัคร</h5>
                        <ul class="list-unstyled text-danger lh-lg text-start">
                            <li>• มัธยมศึกษาตอนปลาย (ม.6)</li>
                            <li>• ประกาศนียบัตรวิชาชีพ (ปวช.)</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card h-100 text-center shadow-lg border-0 bg-white hover-shadow"
                     style="transition: transform 0.3s;"
                     onmouseover="this.style.transform='scale(1.05)'; this.classList.add('bg-danger','text-white');"
                     onmouseout="this.style.transform='scale(1)'; this.classList.remove('bg-danger','text-white');">
                    <div class="card-body d-flex flex-column align-items-center justify-content-between">
                        <div>
                            <i class="bi bi-file-earmark-text-fill mb-3 text-danger" style="font-size:2rem;"></i>
                            <h5 class="card-title text-danger mb-3">รายละเอียดหลักสูตร</h5>
                            <p class="text-danger mb-3">คลิกเพื่อดูรายละเอียดหลักสูตรวิศวกรรมซอฟต์แวร์</p>
                        </div>
                        <a href="https://pgm.npru.ac.th/se/data/files/%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3SE-64.pdf"
                           class="btn btn-danger btn-lg rounded-pill px-4" target="_blank">
                           ดูรายละเอียดหลักสูตร
                        </a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>