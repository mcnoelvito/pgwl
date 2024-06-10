<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create new multiple users
        $user = [
            [
                'name' => 'Husodo',
                'phone' => '081234567890',
                'email' => 'husodo@gmail.com',
                'password' => bcrypt('122333'),
            ],
            [
                'name' => 'Noel',
                'phone' => '081223334444',
                'email' => 'Noel@gmail.com',
                'password' => bcrypt('12254'),
            ],
            [
                'name' => 'Vito',
                'phone' => '085787878788',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('vito4747'),
            ],
            [
                'name' => 'Admin',
                'phone' => '081234567891',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('admin123'),
            ],
        ];
        DB::table('users')->insert($user);
    }
}
