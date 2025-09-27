<div class="border-end bg-dark" id="sidebar-wrapper" style="width: 250px;">
    <div class="sidebar-heading text-white text-center py-4 fs-4 fw-bold">
        แผงควบคุมอาจารย์
    </div>
    <div class="list-group list-group-flush">
        <a href="{{ route('teacher.dashboard') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('teacher.dashboard') ? 'active' : '' }}">
            แดชบอร์ด
        </a>

        <a href="{{ route('teacher.profile.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('teacher.profile.*') ? 'active' : '' }}">
            ข้อมูลส่วนตัว
        </a>

        <a href="{{ route('teacher.hero_slides.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('teacher.hero_slides.*') ? 'active' : '' }}">
            Hero Slide
        </a>

        <a href="{{ route('teacher.news.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('teacher.news.*') ? 'active' : '' }}">
            ข่าวสาร
        </a>

        <a href="{{ route('teacher.activities.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('teacher.activities.*') ? 'active' : '' }}">
            กิจกรรม
        </a>

        <a href="{{ route('teacher.videos.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('teacher.videos.*') ? 'active' : '' }}">
            <i class="fas fa-video"></i> วิดีโอ
        </a>

        <a href="{{ route('teacher.courses.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('teacher.courses.*') ? 'active' : '' }}">
            <i class="fas fa-graduation-cap"></i> หลักสูตร
        </a>

        <a href="{{ route('teacher.course_cards.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('teacher.course_cards.*') ? 'active' : '' }}">
            <i class="fas fa-id-card"></i> การ์ดหลักสูตร
        </a>

        <a href="{{ route('teacher.curriculum_tuitions.index') }}"
            class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('teacher.curriculum_tuitions.*') ? 'active' : '' }}">
            <i class="fas fa-book"></i> หลักสูตร/ค่าเทอม
        </a>

        <form action="{{ route('logout') }}" method="POST" class="mt-4 px-3">
            @csrf
            <button class="btn btn-danger w-100">ออกจากระบบ</button>
        </form>
    </div>
</div>
