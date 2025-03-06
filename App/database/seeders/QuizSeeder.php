<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use Faker\Factory as Faker;

class QuizSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Quiz::create([
                'title' => $faker->sentence(3),
            ]);
        }
    }
}