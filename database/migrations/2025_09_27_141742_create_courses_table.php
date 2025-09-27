<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title_thai')->nullable(); // หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิศวกรรมซอฟต์แวร์
            $table->string('title_english')->nullable(); // Bachelor of Science (Software Engineering)
            $table->string('degree_thai_full')->nullable(); // วิทยาศาสตร์บัณฑิต สาขาวิชาวิศวกรรมซอฟต์แวร์
            $table->string('degree_thai_short')->nullable(); // วท.บ. (วิศวกรรมซอฟต์แวร์)
            $table->string('degree_english_full')->nullable(); // Bachelor of Science (Software Engineering)
            $table->string('degree_english_short')->nullable(); // B.Sc. (Software Engineering)
            $table->integer('total_credits')->nullable(); // 145 หน่วยกิต
            $table->string('image_path')->nullable(); // path สำหรับแผนภาพหลักสูตร
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
