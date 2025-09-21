<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Classroom;
use Illuminate\Http\Request;

class HomeControllers extends Controller
{
    public function laboratory()
    {
        $classrooms = Classroom::all();
        return view('pages.laboratory', compact('classrooms'));
    }

    public function about()
    {
        $about = About::first();
        return view('pages.history', compact('about'));
    }
}
