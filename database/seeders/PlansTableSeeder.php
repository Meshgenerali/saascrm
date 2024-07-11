<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            [
                'name' => 'Basic Plan',
                'description' => 'This is the basic plan.',
                'price' => 9.99,
                'currency' => 'USD',
                'interval' => 30,
                'trial_period_days' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pro Plan',
                'description' => 'This is the pro plan.',
                'price' => 19.99,
                'currency' => 'USD',
                'interval' => 30,
                'trial_period_days' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Enterprise Plan',
                'description' => 'This is the enterprise plan.',
                'price' => 49.99,
                'currency' => 'USD',
                'interval' => 30,
                'trial_period_days' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
