<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriculumTuition extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_thai',
        'title_english', 
        'description_thai',
        'description_english',
        'tuition_fees', // json
        'curriculum_years', // json
        'curriculum_pdf_url',
        'curriculum_pdf_name_thai',
        'curriculum_pdf_name_english',
        'is_active'
    ];

    protected $casts = [
        'tuition_fees' => 'array',
        'curriculum_years' => 'array',
        'is_active' => 'boolean',
    ];
}
