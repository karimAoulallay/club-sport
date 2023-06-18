<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'plan_id' => 1,
            'first_name' => 'admin',
            'last_name' => 'admin',
            'phone' => '0000000000',
            'gender' => 'male',
            'email' => 'admin@mail.com',
            'profile_image' => null,
            'is_admin' => 1,
            'password' => bcrypt('admin123'),
        ]);
    }
}
