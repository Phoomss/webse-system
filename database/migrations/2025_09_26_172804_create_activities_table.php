<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('title');          // ชื่อกิจกรรม
            $table->text('description')->nullable(); // รายละเอียด
            $table->string('image')->nullable();    // รูปกิจกรรม
            $table->date('date')->nullable();       // วันที่กิจกรรม
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
