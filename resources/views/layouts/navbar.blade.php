{{-- 🌐 Top Bar --}}
<div class="w-100 bg-danger text-white text-center small py-2">
    <div class="container d-flex flex-column flex-lg-row justify-content-center align-items-center gap-2 px-3">
        <p class="mb-0">
            "ผลิตบัณฑิตที่มีความรู้และทักษะการพัฒนาซอฟต์แวร์อย่างเป็นระบบ สามารถประยุกต์ใช้อย่างมีคุณธรรม จริยธรรม"
        </p>
        <span class="d-none d-lg-inline-block mx-2">|</span>
        <div class="d-flex align-items-center gap-2">
            <span>ติดต่อเรา : 0888-888-8888</span>
            <a href="https://www.facebook.com/softwarenpru" target="_blank" class="text-white text-decoration-none hover-text-warning">
                <i class="bi bi-facebook"></i>
            </a>
        </div>
    </div>
</div>

{{-- 🌐 Main Navbar --}}
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container px-3">

        {{-- Logo --}}
        <a class="navbar-brand d-flex align-items-center gap-2" href="/" title="Software Engineering Nakhon Pathom">
            <img src="{{ asset('storage/logo.png') }}" alt="Software Engineering Nakhon Pathom" width="130" height="50" class="img-fluid">
        </a>

        {{-- Mobile Toggle --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu --}}
        <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">
                <li class="nav-item">
                    <a class="nav-link" href="/">หน้าแรก</a>
                </li>

                {{-- Dropdown เกี่ยวกับสาขา --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        เกี่ยวกับสาขา
                    </a>
                    <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item" href="/about/history">ประวัติความเป็นมา</a></li>
                        <li><a class="dropdown-item" href="/about/laboratory">ห้องปฏิบัติการ</a></li>
                        <li><a class="dropdown-item" href="/about/teacher">อาจารย์ประจำสาขา</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/course">หลักสูตร/ค่าเทอม</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/news-activities">ข่าวสารและกิจกรรม</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://reg.npru.ac.th/registrar/apphome.asp" target="_blank">สมัครเรียน</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact">ติดต่อสาขา</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
