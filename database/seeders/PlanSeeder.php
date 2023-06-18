<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Admin',
                'duration' => null,
                'price' => null,
            ],
            [
                'name' => 'Premium',
                'duration' => '1 Year',
                'price' => '2200 DH',
            ],
            [
                'name' => 'Standard',
                'duration' => '6 Months',
                'price' => '1200 DH',
            ],
            [
                'name' => 'Basic',
                'duration' => '1 Month',
                'price' => '200 DH',
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
