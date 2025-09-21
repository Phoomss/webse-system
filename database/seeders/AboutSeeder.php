<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'history' => 'ก่อตั้งเมื่อปี พ.ศ. 2540 เพื่อพัฒนาบุคลากรด้านเทคโนโลยีสารสนเทศ',
            'philosophy' => 'เรียนรู้คู่คุณธรรม นำสู่การปฏิบัติจริง',
            'mission' => 'มุ่งสร้างบัณฑิตที่มีความรู้ความสามารถด้านเทคโนโลยี พร้อมคุณธรรมและจริยธรรม',
            'vision' => 'เป็นสาขาวิชาชั้นนำระดับประเทศด้านนวัตกรรมดิจิทัล',
        ]);
    }
}
