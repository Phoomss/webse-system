<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CourseCard;

class CourseCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CourseCard::create([
            'title_thai' => 'รูปแบบหลักสูตร',
            'title_english' => 'Course Format',
            'content_thai' => "• หลักสูตร 4 ปี ภาคปกติ
• เรียนการสอนเป็นภาษาไทย",
            'content_english' => "• 4-year regular program
• Thai language instruction",
            'icon_class' => 'bi-mortarboard-fill',
            'button_text_thai' => 'ดูรายละเอียดหลักสูตร',
            'button_text_english' => 'View Course Details',
            'button_link' => 'https://pgm.npru.ac.th/se/data/files/%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3SE-64.pdf',
            'order' => 1,
        ]);

        CourseCard::create([
            'title_thai' => 'คุณสมบัติผู้สมัคร',
            'title_english' => 'Eligibility Requirements',
            'content_thai' => "• มัธยมศึกษาตอนปลาย (ม.6)
• ประกาศนียบัตรวิชาชีพ (ปวช.)",
            'content_english' => "• High School Graduate (Grade 12)
• Vocational Certificate (ปวช.)",
            'icon_class' => 'bi-person-check-fill',
            'button_text_thai' => 'ดูคุณสมบัติทั้งหมด',
            'button_text_english' => 'View All Requirements',
            'button_link' => '#',
            'order' => 2,
        ]);

        CourseCard::create([
            'title_thai' => 'รายละเอียดหลักสูตร',
            'title_english' => 'Course Details',
            'content_thai' => "คลิกเพื่อดูรายละเอียดหลักสูตรวิศวกรรมซอฟต์แวร์",
            'content_english' => "Click to view detailed software engineering course information",
            'icon_class' => 'bi-file-earmark-text-fill',
            'button_text_thai' => 'ดูรายละเอียดหลักสูตร',
            'button_text_english' => 'View Course Details',
            'button_link' => 'https://pgm.npru.ac.th/se/data/files/%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3SE-64.pdf',
            'order' => 3,
        ]);
    }
}
