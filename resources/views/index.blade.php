@extends('layouts.app')

@section('title', 'หน้าหลัก')

@section('content')
    <section>
        {{-- @include('components.imageHero') --}}
        <x-hero-slide />
    </section>
    <section class="mt-5">
        <div class="mx-auto" style="max-width: 1140px;">
            {{-- @include('components.newsSection') --}}
            <x-news-section />
        </div>
    </section>

    <section class="mt-5">
        <div class="mx-auto" style="max-width: 1140px;">
            @include('components.featureVideo')
        </div>
    </section>

    <section class="mt-5">
        <div class="mx-auto bg-white p-4 p-md-5 rounded-3 shadow-lg" style="max-width: 1140px;">
            @include('components.course')
        </div>
    </section>

    </div>

    <section class="mt-5" style="background-color: #C70039;">
        <div class="container">
            @include('components.courseCard')
        </div>
    </section>

    {{-- Activity Section --}}
    <section class="container my-5">
       <x-activity :activities="$activities" />
    </section>
@endsection
