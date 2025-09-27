@extends('layouts.admin.admin')

@section('title', 'แก้ไขข้อมูลหลักสูตรและค่าเทอม')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">แก้ไขข้อมูลหลักสูตรและค่าเทอม</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.curriculum_tuitions.update', $curriculumTuition->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_thai" class="form-label">ชื่อหัวข้อ (ภาษาไทย)</label>
                            <input type="text" class="form-control" id="title_thai" name="title_thai" value="{{ old('title_thai', $curriculumTuition->title_thai) }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_english" class="form-label">ชื่อหัวข้อ (ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" id="title_english" name="title_english" value="{{ old('title_english', $curriculumTuition->title_english) }}">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description_thai" class="form-label">คำอธิบายเกี่ยวกับหลักสูตร (ภาษาไทย)</label>
                    <textarea class="form-control" id="description_thai" name="description_thai" rows="3">{{ old('description_thai', $curriculumTuition->description_thai) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="description_english" class="form-label">คำอธิบายเกี่ยวกับหลักสูตร (ภาษาอังกฤษ)</label>
                    <textarea class="form-control" id="description_english" name="description_english" rows="3">{{ old('description_english', $curriculumTuition->description_english) }}</textarea>
                </div>

                <!-- Tuition Fees Section -->
                <h4 class="mt-4 mb-3 text-danger">ค่าธรรมเนียมการศึกษา</h4>
                <div id="tuition-fees-container">
                    @if(old('tuition_fees') ?? $curriculumTuition->tuition_fees)
                        @foreach(old('tuition_fees') ?? $curriculumTuition->tuition_fees as $index => $fee)
                        <div class="fee-row mb-3 p-3 border rounded">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">ภาคเรียน</label>
                                    <input type="text" class="form-control" name="tuition_fees[{{ $index }}][semester]" value="{{ $fee['semester'] ?? '' }}" placeholder="เช่น ภาคเรียนที่ 1">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">ค่าธรรมเนียม</label>
                                    <input type="text" class="form-control" name="tuition_fees[{{ $index }}][fee]" value="{{ $fee['fee'] ?? '' }}" placeholder="เช่น 12,700 บาท">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">หมายเหตุ</label>
                                    <input type="text" class="form-control" name="tuition_fees[{{ $index }}][note]" value="{{ $fee['note'] ?? '' }}" placeholder="หมายเหตุ (ถ้ามี)">
                                </div>
                                <div class="col-md-1 d-flex align-items-end">
                                    <button type="button" class="btn btn-danger btn-sm remove-fee" onclick="this.closest('.fee-row').remove()">ลบ</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="fee-row mb-3 p-3 border rounded">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">ภาคเรียน</label>
                                    <input type="text" class="form-control" name="tuition_fees[0][semester]" placeholder="เช่น ภาคเรียนที่ 1">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">ค่าธรรมเนียม</label>
                                    <input type="text" class="form-control" name="tuition_fees[0][fee]" placeholder="เช่น 12,700 บาท">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">หมายเหตุ</label>
                                    <input type="text" class="form-control" name="tuition_fees[0][note]" placeholder="หมายเหตุ (ถ้ามี)">
                                </div>
                                <div class="col-md-1 d-flex align-items-end">
                                    <button type="button" class="btn btn-danger btn-sm remove-fee" onclick="this.closest('.fee-row').remove()">ลบ</button>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <button type="button" class="btn btn-secondary btn-sm mb-3" onclick="addTuitionFee()">+ เพิ่มภาคเรียน/ค่าธรรมเนียม</button>

                <!-- Curriculum Years Section -->
                <h4 class="mt-4 mb-3 text-danger">หลักสูตรการเรียนการสอน</h4>
                <div id="curriculum-years-container">
                    @if(old('curriculum_years') ?? $curriculumTuition->curriculum_years)
                        @foreach(old('curriculum_years') ?? $curriculumTuition->curriculum_years as $index => $year)
                        <div class="year-row mb-3 p-3 border rounded">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">ปีการศึกษา</label>
                                    <input type="text" class="form-control" name="curriculum_years[{{ $index }}][year]" value="{{ $year['year'] ?? '' }}" placeholder="เช่น ปี 1">
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label">รายละเอียดหลักสูตร</label>
                                    <input type="text" class="form-control" name="curriculum_years[{{ $index }}][description]" value="{{ $year['description'] ?? '' }}" placeholder="รายละเอียดหลักสูตรในปีนี้">
                                </div>
                                <div class="col-md-1 d-flex align-items-end">
                                    <button type="button" class="btn btn-danger btn-sm remove-year" onclick="this.closest('.year-row').remove()">ลบ</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="year-row mb-3 p-3 border rounded">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">ปีการศึกษา</label>
                                    <input type="text" class="form-control" name="curriculum_years[0][year]" placeholder="เช่น ปี 1">
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label">รายละเอียดหลักสูตร</label>
                                    <input type="text" class="form-control" name="curriculum_years[0][description]" placeholder="รายละเอียดหลักสูตรในปีนี้">
                                </div>
                                <div class="col-md-1 d-flex align-items-end">
                                    <button type="button" class="btn btn-danger btn-sm remove-year" onclick="this.closest('.year-row').remove()">ลบ</button>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <button type="button" class="btn btn-secondary btn-sm mb-3" onclick="addCurriculumYear()">+ เพิ่มปีการศึกษา</button>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="curriculum_pdf_url" class="form-label">ลิงก์ PDF หลักสูตร</label>
                            <input type="url" class="form-control" id="curriculum_pdf_url" name="curriculum_pdf_url" value="{{ old('curriculum_pdf_url', $curriculumTuition->curriculum_pdf_url) }}" placeholder="https://example.com/file.pdf">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="curriculum_pdf_name_thai" class="form-label">ชื่อไฟล์ PDF (ภาษาไทย)</label>
                            <input type="text" class="form-control" id="curriculum_pdf_name_thai" name="curriculum_pdf_name_thai" value="{{ old('curriculum_pdf_name_thai', $curriculumTuition->curriculum_pdf_name_thai) }}" placeholder="ชื่อไฟล์ในภาษาไทย">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="curriculum_pdf_name_english" class="form-label">ชื่อไฟล์ PDF (ภาษาอังกฤษ)</label>
                            <input type="text" class="form-control" id="curriculum_pdf_name_english" name="curriculum_pdf_name_english" value="{{ old('curriculum_pdf_name_english', $curriculumTuition->curriculum_pdf_name_english) }}" placeholder="File name in English">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', $curriculumTuition->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">ใช้งาน (แสดงผลในหน้าเว็บ)</label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">บันทึก</button>
                <a href="{{ route('admin.curriculum_tuitions.index') }}" class="btn btn-secondary">ยกเลิก</a>
            </form>
        </div>
    </div>
</div>

<script>
function addTuitionFee() {
    const container = document.getElementById('tuition-fees-container');
    const index = container.children.length;
    const newFeeRow = document.createElement('div');
    newFeeRow.className = 'fee-row mb-3 p-3 border rounded';
    newFeeRow.innerHTML = `
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">ภาคเรียน</label>
                <input type="text" class="form-control" name="tuition_fees[${index}][semester]" placeholder="เช่น ภาคเรียนที่ 1">
            </div>
            <div class="col-md-4">
                <label class="form-label">ค่าธรรมเนียม</label>
                <input type="text" class="form-control" name="tuition_fees[${index}][fee]" placeholder="เช่น 12,700 บาท">
            </div>
            <div class="col-md-3">
                <label class="form-label">หมายเหตุ</label>
                <input type="text" class="form-control" name="tuition_fees[${index}][note]" placeholder="หมายเหตุ (ถ้ามี)">
            </div>
            <div class="col-md-1 d-flex align-items-end">
                <button type="button" class="btn btn-danger btn-sm remove-fee" onclick="this.closest('.fee-row').remove()">ลบ</button>
            </div>
        </div>
    `;
    container.appendChild(newFeeRow);
}

function addCurriculumYear() {
    const container = document.getElementById('curriculum-years-container');
    const index = container.children.length;
    const newYearRow = document.createElement('div');
    newYearRow.className = 'year-row mb-3 p-3 border rounded';
    newYearRow.innerHTML = `
        <div class="row">
            <div class="col-md-3">
                <label class="form-label">ปีการศึกษา</label>
                <input type="text" class="form-control" name="curriculum_years[${index}][year]" placeholder="เช่น ปี 1">
            </div>
            <div class="col-md-8">
                <label class="form-label">รายละเอียดหลักสูตร</label>
                <input type="text" class="form-control" name="curriculum_years[${index}][description]" placeholder="รายละเอียดหลักสูตรในปีนี้">
            </div>
            <div class="col-md-1 d-flex align-items-end">
                <button type="button" class="btn btn-danger btn-sm remove-year" onclick="this.closest('.year-row').remove()">ลบ</button>
            </div>
        </div>
    `;
    container.appendChild(newYearRow);
}
</script>
@endsection