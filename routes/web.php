<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about/history', function () {
    return view('pages.history');
});

Route::get('/about/laboratory', function () {
    return view('pages.laboratory');
});

Route::get('/about/teacher', function () {
    return view('pages.departmentHead');
});

Route::get('/course', function () {
    return view('pages.curriculumTuition');
});

Route::get('/news-activities', function () {
    return view('pages.newsActivities');
});
