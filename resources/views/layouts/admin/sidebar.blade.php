<div class="border-end bg-dark" id="sidebar-wrapper" style="width: 250px;">
    <div class="sidebar-heading text-white text-center py-4 fs-4 fw-bold">
        แผงควบคุมผู้ดูแลระบบ
    </div>
    <div class="list-group list-group-flush">
        <a href="{{ route('admin.dashboard') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            แดชบอร์ด
        </a>

        <a href="#userSubmenu" data-bs-toggle="collapse" class="list-group-item list-group-item-action bg-dark text-white">
            ผู้ใช้งาน
        </a>
        <div class="collapse" id="userSubmenu">
            <a href="#" class="list-group-item list-group-item-action bg-dark text-white ps-5">รายชื่อผู้ใช้</a>
            <a href="#" class="list-group-item list-group-item-action bg-dark text-white ps-5">สิทธิ์การเข้าถึง</a>
        </div>

        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">รายงาน</a>

        <a href="{{ route('admin.classrooms.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.classrooms.*') ? 'active' : '' }}">
            ห้องปฏิบัติการ
        </a>

        <a href="{{ route('admin.lecturers.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.lecturers.*') ? 'active' : '' }}">
            อาจารย์
        </a>

        <a href="{{ route('admin.abouts.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.abouts.*') ? 'active' : '' }}">
            เกี่ยวกับสาขา
        </a>

        {{-- เมนู Hero Slide --}}
        <a href="{{ route('admin.hero_slides.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.hero-slides.*') ? 'active' : '' }}">
            Hero Slide
        </a>

        {{-- เมนู News --}}
        <a href="{{ route('admin.news.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.news.*') ? 'active' : '' }}">
            ข่าวสาร
        </a>

        {{-- เมนู Activity --}}
        <a href="{{ route('admin.activities.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.activities.*') ? 'active' : '' }}">
            กิจกรรม
        </a>

        <form action="{{ route('logout') }}" method="POST" class="mt-4 px-3">
            @csrf
            <button class="btn btn-danger w-100">ออกจากระบบ</button>
        </form>
    </div>
</div>
