<?php

namespace Database\Factories;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TweetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Use User::factory() instead of factory(App\User::class)
            'body' => $this->faker->sentence, // Use $this->faker instead of faker->sentence
        ];
    }
}
