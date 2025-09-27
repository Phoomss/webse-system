<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_cards', function (Blueprint $table) {
            $table->id();
            $table->string('title_thai')->nullable(); // ชื่อการ์ดในภาษาไทย (เช่น รูปแบบหลักสูตร)
            $table->string('title_english')->nullable(); // ชื่อการ์ดในภาษาอังกฤษ
            $table->text('content_thai')->nullable(); // เนื้อหาในภาษาไทย
            $table->text('content_english')->nullable(); // เเนื้อหาในภาษาอังกฤษ
            $table->string('icon_class')->nullable(); // ชื่อคลาสของไอคอน (เช่น bi-mortarboard-fill)
            $table->string('button_text_thai')->nullable(); // ข้อความปุ่มในภาษาไทย
            $table->string('button_text_english')->nullable(); // ข้อความปุ่มในภาษาอังกฤษ
            $table->string('button_link')->nullable(); // ลิงก์ของปุ่ม
            $table->integer('order')->default(0); // ลำดับการแสดงผล
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_cards');
    }
};
