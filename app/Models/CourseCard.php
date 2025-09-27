<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_thai',
        'title_english',
        'content_thai',
        'content_english',
        'icon_class',
        'button_text_thai',
        'button_text_english',
        'button_link',
        'order'
    ];

    protected $casts = [
        'order' => 'integer',
    ];
}
