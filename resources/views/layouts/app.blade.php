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
    <link rel="icon" type="image/png" href="https://chat.google.com/u/0/api/get_attachment_url?url_type=FIFE_URL&content_type=image%2Fjpeg&attachment_token=AOo0EEVEDU4WUMUhbwdAUwxhkNND7EeHjznlKrmMee0gLgJqnAQm9GnZtUicwqo4fVOZxuSJdyR6Hih8%2F7z%2BoJkJWCv%2BQe%2BthLa2z0Ugm3%2BYnc9kJAsRkz52ykQgBYAXe5WEwhFznzirVyq7%2F0ynvc5gyeACOqrNsfz3LHH0qJRuw3mDsvhTPvgXn35y9w%2Fp%2FJ%2BqRDn5wC9x2hqPkQFevBqbJPZ0NSnBCoUNmmFvzQW4sVp0t4XrXMMY%2FdvqT50obEe5CYvMuqIgxz6fCHz9U1YJAnRC37gpEnblY7KosmWHJizYqBYWsyGQCq6VkiLA4oZzK8vhyLgdYReTiEnXO19nFFK58tqXTTG1MNMO48tKE9kzoX4gosfTOSg9Tmf%2F6d4oQECEXSHi0xeGSOwoYXGyx05jzIwjrakoEJfkIlwpErpAp%2FUyV1VWUNCshl0pQkgMUMk0eydk4dzstyaGPI%2FIPuPqMewNduvFLQ0pHdcruIESJ%2FO%2B9fEhkyY%2FD13hJ570y7SRWoCHBS69JSGnC8Q2bpAdE3sokJ%2FWYRoUFW99QVgmvmAEl6IoODGa7ReGL2K%2Bm2VrDSiMhSMH0IShKtlJNfP2ovAgkJkspS5v5COoCg1w0g%3D%3D&allow_caching=true&sz=w1432-h774-rw&auditContext=forDisplay">
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