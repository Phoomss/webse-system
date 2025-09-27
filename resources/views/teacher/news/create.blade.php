@extends('layouts.teacher.teacher')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">เพิ่มข่าวใหม่</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">ฟอร์มเพิ่มข่าว</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('teacher.news.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">หัวข้อข่าว</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="content" class="form-label">เนื้อหา</label>
                            <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="image" class="form-label">ลิงก์รูปภาพ</label>
                            <input type="url" class="form-control" id="image" name="image">
                        </div>
                        
                        <div class="mb-3">
                            <label for="link" class="form-label">ลิงก์เพิ่มเติม</label>
                            <input type="url" class="form-control" id="link" name="link">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">บันทึกข่าว</button>
                        <a href="{{ route('teacher.news.index') }}" class="btn btn-secondary">ยกเลิก</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection