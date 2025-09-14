<div class="border-end bg-dark" id="sidebar-wrapper" style="width: 250px;">
    <div class="sidebar-heading text-white text-center py-4 fs-4 fw-bold">Admin Panel</div>
    <div class="list-group list-group-flush">
        <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action bg-dark text-white">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Users</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Reports</a>
        <a href="{{ route('admin.classrooms.index') }}" class="list-group-item list-group-item-action bg-dark text-white">Classrooms</a>

        <form action="{{ route('logout') }}" method="POST" class="mt-4 px-3">
            @csrf
            <button class="btn btn-danger w-100">Logout</button>
        </form>
    </div>
</div>
