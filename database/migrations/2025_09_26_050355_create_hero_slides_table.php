<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hero_slides', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // ข้อความบนสไลด์
            $table->string('image');             // ลิงก์รูปภาพ
            $table->string('link')->nullable();  // ลิงก์ไปยังเพจ/ข่าว
            $table->integer('order')->default(0); // ลำดับการแสดง
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hero_slides');
    }
};
