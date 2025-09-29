<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title', 'url'];

    // Accessor สำหรับแปลงลิงก์ให้เป็น embed URL
    public function getEmbedUrlAttribute()
    {
        $url = $this->url;
        $videoId = null;

        // ถ้าเป็น youtu.be
        if (strpos($url, 'youtu.be/') !== false) {
            $videoId = substr(parse_url($url, PHP_URL_PATH), 1);
        }
        // ถ้าเป็น watch?v=
        elseif (strpos($url, 'watch?v=') !== false) {
            parse_str(parse_url($url, PHP_URL_QUERY), $queryParams);
            $videoId = $queryParams['v'] ?? null;
        }
        // ถ้าเป็น embed อยู่แล้ว
        elseif (strpos($url, 'embed/') !== false) {
            return $url; // ใช้ได้เลย
        }

        // ถ้ามี videoId แล้ว ค่อยสร้าง embed link
        if ($videoId) {
            return 'https://www.youtube.com/embed/' . $videoId;
        }

        // ถ้าไม่สามารถแปลงได้
        return '';
    }
}
