<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'type' => 1,
            'name' => 'Administrator',
            'email' => 'gipra@gmail.com',
            'mobile_prefix' => '+91',
            'mobile' => '9898788990',
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
