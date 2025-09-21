@extends('layouts.admin.admin')

@section('content')
    <div class="card shadow-lg rounded-4">
        <div class="card-header bg-warning text-dark fw-bold">
            แก้ไขข้อมูลเกี่ยวกับสาขา
        </div>
        <div class="card-body">
            <form action="{{ route('admin.abouts.update', $about->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-bold">ประวัติ (History)</label>
                    <textarea name="history" class="form-control" rows="3" required>{{ old('history', $about->history) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">ปรัชญา (Philosophy)</label>
                    <textarea name="philosophy" class="form-control" rows="3" required>{{ old('philosophy', $about->philosophy) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">พันธกิจ (Mission)</label>
                    <textarea name="mission" class="form-control" rows="3" required>{{ old('mission', $about->mission) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">วิสัยทัศน์ (Vision)</label>
                    <textarea name="vision" class="form-control" rows="3" required>{{ old('vision', $about->vision) }}</textarea>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.abouts.index') }}" class="btn btn-secondary">ยกเลิก</a>
                    <button type="submit" class="btn btn-primary">อัปเดตข้อมูล</button>
                </div>
            </form>
        </div>
    </div>
@endsection
