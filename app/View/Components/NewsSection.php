<?php

namespace App\View\Components;

use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsSection extends Component
{
    public $newsList;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
       $this->newsList = News::latest()->take(6)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-section', [
            'newsList' => $this->newsList,
        ]);
    }
}
