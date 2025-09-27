@extends('layouts.app')

@section('title', 'หลักสูตรและค่าเล่าเรียน')

@section('content')
    <x-curriculum-tuition :curriculumTuition="$curriculumTuition" />

    {{-- <div class="mx-auto bg-white p-4 p-md-5 rounded-3 shadow-lg" style="max-width: 1140px;">
        <x-course :course="$course" />
    </div>

    <div class="mt-5" style="background-color: #C70039;">
        <div class="container">
            <x-course-card :courseCards="$courseCards" />
        </div>
    </div> --}}
@endsection
