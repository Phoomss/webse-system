<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\HeroSlide as HeroSlideModel; // เรียกใช้ Model

class HeroSlide extends Component
{
    public $slides; // เพิ่ม property สำหรับเก็บสไลด์

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // ดึงข้อมูลสไลด์จาก DB เรียงตาม order
        $this->slides = HeroSlideModel::orderBy('order')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-slide', [
            'slides' => $this->slides, // ส่งข้อมูลไปยัง Blade
        ]);
    }
}
