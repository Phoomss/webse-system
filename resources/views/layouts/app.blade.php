<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Software Engineering NPRU')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="เว็บไซต์สาขาวิศวกรรมซอฟต์แวร์ มหาวิทยาลัยราชภัฏนครปฐม">
    <meta name="keywords"
        content="วิศวกรรมซอฟต์แวร์, มหาวิทยาลัยราชภัฏนครปฐม, Software Engineering, Nakhon Pathom, se npru, npru se">
    <link rel="icon" type="image/png" href="{{ asset('storage/logo.png') }}">
    <title>@yield('title', 'สาขาวิศวกรรมซอฟต์แวร์ มหาวิทยาลัยราชภัฏนครปฐม')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Main content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
