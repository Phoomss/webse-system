@props(['curriculumTuition' => null])

<section class="py-5 px-4">
    {{-- Heading --}}
    <div class="text-center mb-5">
        <p class="text-uppercase text-muted mb-2" style="letter-spacing:2px;">{{ $curriculumTuition->title_english ?? 'SE Course & Tuition' }}</p>
        <h1 class="display-5 fw-bold text-danger mb-3">{{ $curriculumTuition->title_thai ?? 'หลักสูตร และ ค่าเทอม' }}</h1>
        <div class="mx-auto bg-danger rounded-pill" style="height:4px; width:5rem;"></div>
    </div>

    <div class="container">
        @if($curriculumTuition)
            @if($curriculumTuition->description_thai)
                <div class="text-center mb-5">
                    <p class="lead">{{ $curriculumTuition->description_thai }}</p>
                </div>
            @endif

            {{-- Tuition Table --}}
            <section class="mb-5">
                <h2 class="h4 fw-bold text-danger mb-3"><i class="bi bi-journal-text me-2"></i>ค่าธรรมเนียมการศึกษา</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle shadow-sm">
                        <thead class="table-danger">
                            <tr>
                                <th scope="col">ภาคเรียน</th>
                                <th scope="col">ค่าธรรมเนียม</th>
                                <th scope="col">หมายเหตุ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($curriculumTuition->tuition_fees)
                                @foreach($curriculumTuition->tuition_fees as $fee)
                                    <tr>
                                        <td>{{ $fee['semester'] ?? '-' }}</td>
                                        <td>{{ $fee['fee'] ?? '-' }}</td>
                                        <td>{{ $fee['note'] ?? '-' }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>ภาคเรียนที่ 1</td>
                                    <td>12,700 บาท</td>
                                    <td>รวมค่าใช้จ่ายเบื้องต้น</td>
                                </tr>
                                <tr>
                                    <td>ภาคเรียนที่ 2</td>
                                    <td>11,700 บาท</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>ภาคฤดูร้อน</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </section>

            {{-- Course Curriculum --}}
            <section class="mb-5">
                <h2 class="h4 fw-bold text-danger mb-3"><i class="bi bi-book me-2"></i>หลักสูตรการเรียนการสอน</h2>
                <div class="card shadow-sm">
                    <div class="card-body">
                        @if($curriculumTuition->description_thai)
                            <p>{{ $curriculumTuition->description_thai }}</p>
                        @endif
                        
                        <ul class="list-group list-group-flush mt-3">
                            @if($curriculumTuition->curriculum_years)
                                @foreach($curriculumTuition->curriculum_years as $year)
                                    <li class="list-group-item">{{ $year['year'] ?? '' }} : {{ $year['description'] ?? '' }}</li>
                                @endforeach
                            @else
                                <li class="list-group-item">ปี 1 : ภาษาอังกฤษเพื่อการสื่อสาร, เทคโนโลยีดิจิทัล, วิศวกรรมซอฟต์แวร์เบื้องต้น, การออกแบบอัลกอริทึม</li>
                                <li class="list-group-item">ปี 2 : การพัฒนาโปรแกรมประยุกต์, ปฏิสัมพันธ์ระหว่างมนุษย์กับคอมพิวเตอร์, การพัฒนาโปรแกรมประยุกต์ฐานข้อมูล, วิศวกรรมซอฟต์แวร์, การเขียนโปรแกรมคอมพิวเตอร์</li>
                                <li class="list-group-item">ปี 3 : การพัฒนาเว็บแอปพลิเคชัน, การวิเคราะห์และออกแบบเชิงวัตถุ, สถิติและวิธีการเชิงประสบการณ์, เทคโนโลยีบล็อกเชน</li>
                                <li class="list-group-item">ปี 4 : การพัฒนาโปรแกรมประยุกต์บนเว็บ, การทดสอบซอฟต์แวร์, การพัฒนาและปรับปรุงซอฟต์แวร์, ฝึกประสบการณ์วิชาชีพ, โครงงานวิจัยด้านวิศวกรรมซอฟต์แวร์</li>
                            @endif
                        </ul>
                        
                        @if($curriculumTuition->curriculum_pdf_url)
                            <div class="text-center mt-4">
                                <a href="{{ $curriculumTuition->curriculum_pdf_url }}" target="_blank" class="btn btn-danger btn-lg">
                                    {{ $curriculumTuition->curriculum_pdf_name_thai ?? 'ดาวน์โหลดรายละเอียดหลักสูตร' }}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        @else
            {{-- Fallback content if no curriculum tuition data --}}
            <div class="text-center mb-5">
                <p class="lead">ไม่พบข้อมูลหลักสูตรและค่าเทอม</p>
            </div>
        @endif
    </div>
</section>