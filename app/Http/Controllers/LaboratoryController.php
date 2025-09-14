<?php

namespace App\Http\Controllers;

use App\Models\Classroom;

class LaboratoryController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();

        return view('pages.laboratory', compact('classrooms'));
    }
}
