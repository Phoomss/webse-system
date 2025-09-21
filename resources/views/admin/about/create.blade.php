@extends('layouts.admin.admin')

@section('content')
    <div class="card shadow-lg rounded-4">
        <div class="card-header bg-primary text-white fw-bold">
            เพิ่มข้อมูลเกี่ยวกับสาขา
        </div>
        <div class="card-body">
            <form action="{{ route('admin.abouts.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold">ประวัติ (History)</label>
                    <textarea name="history" class="form-control" rows="3" required>{{ old('history') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">ปรัชญา (Philosophy)</label>
                    <textarea name="philosophy" class="form-control" rows="3" required>{{ old('philosophy') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">พันธกิจ (Mission)</label>
                    <textarea name="mission" class="form-control" rows="3" required>{{ old('mission') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">วิสัยทัศน์ (Vision)</label>
                    <textarea name="vision" class="form-control" rows="3" required>{{ old('vision') }}</textarea>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.abouts.index') }}" class="btn btn-secondary">ยกเลิก</a>
                    <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                </div>
            </form>
        </div>
    </div>
@endsection
