<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'], // ถ้าเจอ email เดิมจะอัปเดต
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'), // ตั้งรหัสผ่าน
                'role' => 'admin',
            ]
        );

        User::updateOrCreate(
            ['email' => 'teacher@example.com'],
            [
                'name' => 'Teacher User',
                'password' => Hash::make('password'),
                'role' => 'teacher',
            ]
        );
    }
}
