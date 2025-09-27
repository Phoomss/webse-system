<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_thai',
        'title_english',
        'degree_thai_full',
        'degree_thai_short',
        'degree_english_full',
        'degree_english_short',
        'total_credits',
        'image_path'
    ];

    protected $casts = [
        'total_credits' => 'integer',
    ];
    
    /**
     * Handle image upload and return the stored path
     */
    public function uploadImage($image)
    {
        if ($image) {
            // Delete old image if exists
            if ($this->image_path && Storage::exists($this->image_path)) {
                Storage::delete($this->image_path);
            }
            
            // Store new image and return the path
            return $image->store('course_images', 'public');
        }
        
        return $this->image_path;
    }
}
