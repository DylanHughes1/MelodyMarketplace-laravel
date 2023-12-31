<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Martin Hughes',
                'email' => 'martinmaslein@outlook.com',
                'password' => bcrypt('web2023'),
            ],

            [
                'name' => 'Admin',
                'email' => 'admin@iaw.com',
                'password' => bcrypt('admin123'),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
