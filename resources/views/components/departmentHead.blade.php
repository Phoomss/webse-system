<div class="container">
    <h1 class="text-center text-danger fw-bold mb-5">คณะกรรมการสาขาวิศวกรรมซอฟต์แวร์</h1>

    <div class="row g-4">
        @forelse($teacher as $lecturer)
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 position-relative overflow-hidden">

                    <!-- รูปวงกลม -->
                    <div class="position-relative text-center mt-4">
                        <img src="{{ $lecturer->image ?? 'https://via.placeholder.com/120' }}"
                             class="rounded-circle border border-3 border-white shadow-sm"
                             alt="{{ $lecturer->name }}"
                             style="width: 120px; height: 120px; object-fit: cover;">
                    </div>

                    <div class="card-body text-center pt-5">
                        <h5 class="card-title text-danger fw-bold">{{ $lecturer->name }}</h5>
                        <p class="card-text text-secondary">{{ $lecturer->position }}</p>
                        @if ($lecturer->email)
                            <p class="text-muted small">{{ $lecturer->email }}</p>
                        @endif
                    </div>

                    <!-- Hover effect overlay -->
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-to-bottom opacity-0 hover-opacity-25 transition"></div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">ยังไม่มีข้อมูลอาจารย์</div>
            </div>
        @endforelse
    </div>
</div>

<style>
.card:hover {
    transform: translateY(-8px);
    transition: transform 0.3s;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}
</style>
