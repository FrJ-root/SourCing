<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Question::create([
                'enonce' => $faker->sentence(6),
                'image' => null,
                'is_multiple_choice' => $faker->boolean,
            ]);
        }
    }
}