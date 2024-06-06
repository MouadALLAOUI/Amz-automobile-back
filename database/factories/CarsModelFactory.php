<?php

namespace Database\Factories;

use App\Models\CarsMake;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarsModel>
 */
class CarsModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'series' => $this->faker->numberBetween(1960, 2024),
            'cars_make_id' => CarsMake::factory(),
        ];
    }
}
