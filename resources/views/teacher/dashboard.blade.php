@extends('layouts.teacher.teacher')

@section('content')
<h1 class="mb-4">Dashboard</h1>

<div class="row">
    @php
        $stats = [
            ['title' => 'Users', 'value' => 120],
            ['title' => 'Teachers', 'value' => 15],
            ['title' => 'Admins', 'value' => 3],
            ['title' => 'Reports', 'value' => 45],
        ];
    @endphp

    @foreach($stats as $stat)
        <x-card :title="$stat['title']" :value="$stat['value']" />
    @endforeach
</div>

<div class="row">
    <div class="col-12">
        <div class="card mt-4 shadow-sm">
            <div class="card-header bg-primary text-white">Recent Activity</div>
            <div class="card-body">
                <ul>
                    <li>User John registered</li>
                    <li>Report #123 generated</li>
                    <li>Teacher Mary updated profile</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
