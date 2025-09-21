<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('history')->nullable();    // ประวัติ
            $table->text('philosophy')->nullable(); // ปรัชญา
            $table->text('mission')->nullable();    // ปณิธาน
            $table->text('vision')->nullable();     // วิสัยทัศน์
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
