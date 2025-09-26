<?php

// app/View/Components/Activity.php
namespace App\View\Components;

use Illuminate\View\Component;

class Activity extends Component
{
    public $activities;

    public function __construct($activities = [])
    {
        $this->activities = $activities;
    }

    public function render()
    {
        return view('components.activity');
    }
}
