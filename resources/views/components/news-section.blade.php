<div class="text-center mb-5">
    <p class="text-uppercase text-secondary small mb-2">SE News</p>
    <h1 class="display-5 fw-bold text-danger mb-2">ข่าวประชาสัมพันธ์</h1>
    <div class="bg-danger mx-auto rounded-pill" style="height:4px; width:6rem;"></div>
</div>

<div class="container">
    <div class="row g-4">
        @foreach ($newsList as $news)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0 hover-shadow" data-aos="fade-left">
                <img src="{{ $news->image }}" class="card-img-top" alt="{{ $news->title }}" style="height:12rem; object-fit:cover;">
                <div class="card-body">
                    <p class="text-muted small mb-1">{{ $news->created_at->format('d/m/Y') }}</p>
                    <h5 class="card-title text-danger mb-2">{{ $news->title }}</h5>
                    <p class="card-text text-secondary">{{ $news->content }}</p>
                    @if($news->link)
                        <a href="{{ $news->link }}" class="text-danger fw-semibold text-decoration-none">อ่านเพิ่มเติม →</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="text-center mt-4">
    <a href="/news-activities" class="btn btn-danger btn-lg rounded-pill px-5">
        ดูข่าวทั้งหมด
    </a>
</div>

<style>
.hover-shadow:hover {
    box-shadow: 0 1rem 3rem rgba(0,0,0,0.3) !important;
    transition: all 0.3s ease;
}
</style>
