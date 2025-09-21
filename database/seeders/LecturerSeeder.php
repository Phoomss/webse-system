<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lecturer;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lecturers = [
            [
                'name' => 'ผศ.ดร.อุษณีย์ ภักดีตระกูลวงศ์',
                'position' => 'ประธานสาขาวิชา',
                'email' => 'usanee@example.com',
                'image' => 'https://sc.npru.ac.th/sc_major/assets/images/lecturer/1706694016_43d4f45dca2d4f9011a4.jpg',
            ],
            [
                'name' => 'ผศ.ดร.วรเชษฐ์ อุทธา',
                'position' => 'รองประธานสาขา (ประธานสาขา)',
                'email' => 'woraset@example.com',
                'image' => 'https://sc.npru.ac.th/sc_major/assets/images/lecturer/1706693986_c5a3e8541b6f087048fa.jpg',
            ],
            [
                'name' => 'ผศ.สมเกียรติ ช่อเหมือน',
                'position' => 'รองประธานฯ ฝ่ายนโยบายและแผน',
                'email' => 'somkiat@example.com',
                'image' => 'https://sc.npru.ac.th/sc_major/assets/images/lecturer/1706694064_e094c4d933ac0ed7cd03.jpg',
            ],
            [
                'name' => 'ผศ.นฤพล สุวรรณวิจิตร',
                'position' => 'รองประธานฯ ฝ่ายประกันคุณภาพฯ',
                'email' => 'narupol@example.com',
                'image' => 'https://sc.npru.ac.th/sc_major/assets/images/lecturer/1716485261_38d6e57b8d63fe377d25.jpg',
            ],
            [
                'name' => 'อาจารย์ ดร.สุพิฌาย์ จันทร์เรือง',
                'position' => 'รองประธานฯ ฝ่ายกิจการนักศึกษา',
                'email' => 'supichai@example.com',
                'image' => 'https://sc.npru.ac.th/sc_major/assets/images/lecturer/1706694139_d6a2ba899f7470f5fd45.png',
            ],
            [
                'name' => 'อาจารย์สมหมาย กรังพานิช',
                'position' => 'กรรมการผู้จัดการ บริษัท พี เอ็น พี โซลูชั่น จำกัด',
                'email' => 'sommai@example.com',
                'image' => 'https://sc.npru.ac.th/sc_major/assets/images/lecturer/1706697016_17296e0d4cca0c92558f.jpg',
            ],
        ];

        foreach ($lecturers as $lecturer) {
            Lecturer::create($lecturer);
        }
    }
}
