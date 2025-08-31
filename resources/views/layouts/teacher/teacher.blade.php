<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
            font-family: 'Segoe UI', sans-serif;
        }
        #sidebar-wrapper {
            min-height: 100vh;
            background-color: #1f2937; /* modern dark gray */
            color: #fff;
        }
        #sidebar-wrapper .nav-link {
            color: #cbd5e1;
        }
        #sidebar-wrapper .nav-link.active {
            background-color: #374151;
            border-radius: 0.375rem;
        }
        #sidebar-wrapper .list-group-item:hover {
            background-color: #4b5563;
        }
    </style>
</head>
<body>

<div class="d-flex" id="wrapper">

    {{-- Sidebar --}}
    @include('layouts.teacher.sidebar')

    {{-- Page Content --}}
    <div id="page-content-wrapper" class="flex-fill">

        {{-- Navbar --}}
        @include('layouts.teacher.navbarDashboard')

        {{-- Main content --}}
        <div class="container-fluid p-4">
            @yield('content')
        </div>

    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const toggleButton = document.getElementById('menu-toggle');
    const wrapper = document.getElementById('wrapper');
    toggleButton?.addEventListener('click', () => {
        wrapper.classList.toggle('toggled');
    });
</script>

<style>
    @media (max-width: 768px) {
        #sidebar-wrapper {
            width: 0;
            transition: width 0.3s;
        }
        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }
    }
</style>

</body>
</html>
