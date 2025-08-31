<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm border-bottom">
    <div class="container-fluid">
        <button class="btn btn-primary" id="menu-toggle">☰</button>
        <div class="ms-auto d-flex align-items-center">
            <img src="https://i.pravatar.cc/40?u={{ auth()->user()->id }}" alt="Avatar" class="rounded-circle me-2" width="40" height="40">
            <span>{{ auth()->user()->name }}</span>
        </div>
    </div>
</nav>
