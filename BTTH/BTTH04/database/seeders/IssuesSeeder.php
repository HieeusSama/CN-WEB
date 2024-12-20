<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class IssuesSeeder extends Seeder
{
    
    public function run(): void
    {

        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table("issues")->insert([
                'computer_id' => $faker->numberBetween(1,50),
                'reported_by' => $faker->name,
                'reported_date' => $faker->date(),
                'description' => $faker->text,
                'urgency'=> $faker->randomElement(['Low', 'Medium', 'High']),
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved'])
            ]);
        }
    }
}
