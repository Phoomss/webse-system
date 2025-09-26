<!-- resources/views/components/hero-slide.blade.php -->
<div id="heroCarousel" class="carousel slide carousel-fade shadow-lg" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        @foreach($slides as $index => $slide)
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $index }}"
                    class="{{ $index === 0 ? 'active' : '' }}"
                    aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>

    <!-- Slides -->
    <div class="carousel-inner">
        @foreach($slides as $index => $slide)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <div class="ratio ratio-16x9">
                    <img src="{{ $slide->image }}" class="d-block w-100 h-100 object-fit-cover"
                         alt="{{ $slide->title ?? 'Slide ' . ($index+1) }}">
                </div>
                @if($slide->title || $slide->link)
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                        @if($slide->title)
                            <h5>{{ $slide->title }}</h5>
                        @endif
                        @if($slide->link)
                            <a href="{{ $slide->link }}" class="btn btn-primary btn-sm">เพิ่มเติม</a>
                        @endif
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
