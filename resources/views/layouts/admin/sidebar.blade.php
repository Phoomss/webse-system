<div class="border-end bg-dark" id="sidebar-wrapper" style="width: 250px;">
    <div class="sidebar-heading text-white text-center py-4 fs-4 fw-bold">
        แผงควบคุมผู้ดูแลระบบ
    </div>
    <div class="list-group list-group-flush">
        <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action bg-dark text-white">
            แดชบอร์ด
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
            ผู้ใช้งาน
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
            รายงาน
        </a>
        <a href="{{ route('admin.classrooms.index') }}" class="list-group-item list-group-item-action bg-dark text-white">
            ห้องปฏิบัติการ
        </a>
        <a href="{{ route('admin.abouts.index') }}" class="list-group-item list-group-item-action bg-dark text-white">
            เกี่ยวกับสาขา
        </a>

        <form action="{{ route('logout') }}" method="POST" class="mt-4 px-3">
            @csrf
            <button class="btn btn-danger w-100">ออกจากระบบ</button>
        </form>
    </div>
</div>
