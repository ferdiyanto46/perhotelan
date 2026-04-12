<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Hotels;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Hotels>
 */
class HotelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'city' => fake()->city(),
            'address' => fake()->address(),
            'description' => Str::random(10),
            'rating' => mt_rand(1,5),
            'img_url' => Str::random(10),
            ];
    }
}
