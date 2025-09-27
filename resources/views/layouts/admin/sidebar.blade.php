<div class="border-end bg-dark" id="sidebar-wrapper" style="width: 250px;">
    <div class="sidebar-heading text-white text-center py-4 fs-4 fw-bold">
        แผงควบคุมผู้ดูแลระบบ
    </div>
    <div class="list-group list-group-flush">
        <a href="{{ route('admin.dashboard') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            แดชบอร์ด
        </a>

        <a href="{{ route('admin.classrooms.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.classrooms.*') ? 'active' : '' }}">
            ห้องปฏิบัติการ
        </a>

        <a href="{{ route('admin.lecturers.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.lecturers.*') ? 'active' : '' }}">
            อาจารย์
        </a>

        <a href="{{ route('admin.teachers.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.teachers.*') ? 'active' : '' }}">
            จัดการอาจารย์
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

        {{-- เมนู Videos --}}
        <a href="{{ route('admin.videos.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.videos.*') ? 'active' : '' }}">
            <i class="fas fa-video"></i> วิดีโอ
        </a>

        <a href="{{ route('admin.courses.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.courses.*') ? 'active' : '' }}">
            <i class="fas fa-graduation-cap"></i> หลักสูตร
        </a>

        <a href="{{ route('admin.course_cards.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.course_cards.*') ? 'active' : '' }}">
            <i class="fas fa-id-card"></i> การ์ดหลักสูตร
        </a>

        <a href="{{ route('admin.curriculum_tuitions.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.curriculum_tuitions.*') ? 'active' : '' }}">
            <i class="fas fa-book"></i> หลักสูตร/ค่าเทอม
        </a>

        <a href="{{ route('admin.users.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
            <i class="fas fa-users"></i> จัดการผู้ใช้งาน
        </a>

        <form action="{{ route('logout') }}" method="POST" class="mt-4 px-3">
            @csrf
            <button class="btn btn-danger w-100">ออกจากระบบ</button>
        </form>
    </div>
</div>
