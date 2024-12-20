<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ComputersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table("computers")->insert([
                'computer_name' => $faker-> randomElement(['MSI','Macbook', 'Skibidi']),
                'model'  => $faker->sentence(2),
                'operating_system' => $faker->randomElement(['Windows 10','Windows 11', 'Windows 12']),
                'processor' => $faker->sentence(2),
                'memory' => $faker->numberBetween(1, 64),
                'available' => $faker->boolean,
            ]);
        }
        
    }
}
