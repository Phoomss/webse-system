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
        Schema::table('news', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by')->nullable()->after('id');
        });

        Schema::table('activities', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by')->nullable()->after('id');
        });

        Schema::table('videos', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by')->nullable()->after('id');
        });
        
        Schema::table('hero_slides', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('created_by');
        });

        Schema::table('activities', function (Blueprint $table) {
            $table->dropColumn('created_by');
        });

        Schema::table('videos', function (Blueprint $table) {
            $table->dropColumn('created_by');
        });
        
        Schema::table('hero_slides', function (Blueprint $table) {
            $table->dropColumn('created_by');
        });
    }
};
