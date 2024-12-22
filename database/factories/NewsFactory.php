<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create('id_ID');

        return [
            'title' => $this->faker->catchPhrase,
            'description' => $this->faker->text(rand(3000, 9000)),
            'author' => $faker->firstName() . ' ' . $faker->lastName(),
            'time' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
