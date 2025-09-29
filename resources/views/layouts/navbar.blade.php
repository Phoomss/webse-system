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
            <img src="https://chat.google.com/u/0/api/get_attachment_url?url_type=FIFE_URL&content_type=image%2Fjpeg&attachment_token=AOo0EEVEDU4WUMUhbwdAUwxhkNND7EeHjznlKrmMee0gLgJqnAQm9GnZtUicwqo4fVOZxuSJdyR6Hih8%2F7z%2BoJkJWCv%2BQe%2BthLa2z0Ugm3%2BYnc9kJAsRkz52ykQgBYAXe5WEwhFznzirVyq7%2F0ynvc5gyeACOqrNsfz3LHH0qJRuw3mDsvhTPvgXn35y9w%2Fp%2FJ%2BqRDn5wC9x2hqPkQFevBqbJPZ0NSnBCoUNmmFvzQW4sVp0t4XrXMMY%2FdvqT50obEe5CYvMuqIgxz6fCHz9U1YJAnRC37gpEnblY7KosmWHJizYqBYWsyGQCq6VkiLA4oZzK8vhyLgdYReTiEnXO19nFFK58tqXTTG1MNMO48tKE9kzoX4gosfTOSg9Tmf%2F6d4oQECEXSHi0xeGSOwoYXGyx05jzIwjrakoEJfkIlwpErpAp%2FUyV1VWUNCshl0pQkgMUMk0eydk4dzstyaGPI%2FIPuPqMewNduvFLQ0pHdcruIESJ%2FO%2B9fEhkyY%2FD13hJ570y7SRWoCHBS69JSGnC8Q2bpAdE3sokJ%2FWYRoUFW99QVgmvmAEl6IoODGa7ReGL2K%2Bm2VrDSiMhSMH0IShKtlJNfP2ovAgkJkspS5v5COoCg1w0g%3D%3D&allow_caching=true&sz=w1432-h774-rw&auditContext=forDisplay" alt="Software Engineering Nakhon Pathom" width="130" height="50" class="img-fluid">
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