<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CurriculumTuition;

class CurriculumTuitionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CurriculumTuition::create([
            'title_thai' => 'หลักสูตร และ ค่าเทอม',
            'title_english' => 'SE Course & Tuition',
            'description_thai' => 'หลักสูตรวิศวกรรมซอฟต์แวร์มุ่งเน้นการผลิตบัณฑิตที่มีความรู้ ความสามารถในการพัฒนาระบบซอฟต์แวร์อย่างมีประสิทธิภาพ สามารถทำงานร่วมกับผู้อื่น และมีจริยธรรมทางวิชาชีพ',
            'description_english' => 'The Software Engineering curriculum focuses on producing graduates with knowledge and capabilities to develop software systems effectively, work in teams, and maintain professional ethics.',
            'tuition_fees' => [
                ['semester' => 'ภาคเรียนที่ 1', 'fee' => '12,700 บาท', 'note' => 'รวมค่าใช้จ่ายเบื้องต้น'],
                ['semester' => 'ภาคเรียนที่ 2', 'fee' => '11,700 บาท', 'note' => '-'],
                ['semester' => 'ภาคฤดูร้อน', 'fee' => '-', 'note' => '-'],
            ],
            'curriculum_years' => [
                ['year' => 'ปี 1', 'description' => 'ภาษาอังกฤษเพื่อการสื่อสาร, เทคโนโลยีดิจิทัล, วิศวกรรมซอฟต์แวร์เบื้องต้น, การออกแบบอัลกอริทึม'],
                ['year' => 'ปี 2', 'description' => 'การพัฒนาโปรแกรมประยุกต์, ปฏิสัมพันธ์ระหว่างมนุษย์กับคอมพิวเตอร์, การพัฒนาโปรแกรมประยุกต์ฐานข้อมูล, วิศวกรรมซอฟต์แวร์, การเขียนโปรแกรมคอมพิวเตอร์'],
                ['year' => 'ปี 3', 'description' => 'การพัฒนาเว็บแอปพลิเคชัน, การวิเคราะห์และออกแบบเชิงวัตถุ, สถิติและวิธีการเชิงประสบการณ์, เทคโนโลยีบล็อกเชน'],
                ['year' => 'ปี 4', 'description' => 'การพัฒนาโปรแกรมประยุกต์บนเว็บ, การทดสอบซอฟต์แวร์, การพัฒนาและปรับปรุงซอฟต์แวร์, ฝึกประสบการณ์วิชาชีพ, โครงงานวิจัยด้านวิศวกรรมซอฟต์แวร์'],
            ],
            'curriculum_pdf_url' => 'https://pgm.npru.ac.th/se/data/files/%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3SE-64.pdf',
            'curriculum_pdf_name_thai' => 'ดาวน์โหลดรายละเอียดหลักสูตร (หลักสูตรปรับปรุง พ.ศ. 2564)',
            'curriculum_pdf_name_english' => 'Download Course Details (Revised Curriculum B.E. 2564)',
            'is_active' => true,
        ]);
    }
}
