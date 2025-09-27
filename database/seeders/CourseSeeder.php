<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Course::create([
            'title_thai' => 'หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิศวกรรมซอฟต์แวร์',
            'title_english' => 'Bachelor of Science Program in Software Engineering',
            'degree_thai_full' => 'วิทยาศาสตร์บัณฑิต สาขาวิชาวิศวกรรมซอฟต์แวร์',
            'degree_thai_short' => 'วท.บ. (วิศวกรรมซอฟต์แวร์)',
            'degree_english_full' => 'Bachelor of Science in Software Engineering',
            'degree_english_short' => 'B.Sc. (Software Engineering)',
            'total_credits' => 145,
            'image_path' => 'storage/imageBarcher.png', // Using the default image path
        ]);
    }
}
