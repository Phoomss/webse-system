<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = [
            [
                'title' => 'อาคารปฏิบัติการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏนครปฐม',
                'img' => 'https://sc.npru.ac.th/sc_major/assets/images/laboratory/1706695830_4cfc50904539177efe52.jpg',
            ],
            [
                'title' => 'ห้องปฏิบัติการคอมพิวเตอร์ C408',
                'img' => 'https://sc.npru.ac.th/sc_major/assets/images/laboratory/1706696144_9c9da38b4de6b2f98859.jpg',
            ],
            [
                'title' => 'ห้องปฏิบัติการคอมพิวเตอร์ C409',
                'img' => 'https://sc.npru.ac.th/sc_major/assets/images/laboratory/1706696156_5feb9ba120f4489dd75b.jpg',
            ],
            [
                'title' => 'อาคารปฏิบัติการคอมพิวเตอร์',
                'img' => 'https://sc.npru.ac.th/sc_major/assets/images/laboratory/1706696068_17458c1c1b0af86cf5b1.jpg',
            ],
        ];

        foreach ($classrooms as $room) {
            Classroom::create($room);
        }
    }
}
