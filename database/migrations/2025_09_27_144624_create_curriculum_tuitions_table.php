<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('curriculum_tuitions', function (Blueprint $table) {
            $table->id();
            $table->string('title_thai')->nullable(); // หลักสูตร และ ค่าเทอม
            $table->string('title_english')->nullable();
            $table->text('description_thai')->nullable(); // คำอธิบายเกี่ยวกับหลักสูตร
            $table->text('description_english')->nullable();
            $table->json('tuition_fees')->nullable(); // ค่าธรรมเนียมการศึกษาในแต่ละภาคเรียน
            $table->json('curriculum_years')->nullable(); // หลักสูตรการเรียนการสอนแยกตามปี
            $table->string('curriculum_pdf_url')->nullable(); // ลิงก์ PDF หลักสูตร
            $table->string('curriculum_pdf_name_thai')->nullable(); // ชื่อไฟล์ PDF
            $table->string('curriculum_pdf_name_english')->nullable();
            $table->boolean('is_active')->default(true); // ใช้งานหรือไม่
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('curriculum_tuitions');
    }
};
