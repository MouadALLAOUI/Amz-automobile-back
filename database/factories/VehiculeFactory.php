<?php

namespace Database\Factories;

use App\Models\CarsMake;
use App\Models\CarsModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vehicule>
 */
class vehiculeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vehicule' => CarsMake::factory(),
            'immatriculation' => $this->faker->word,
            'kilometrage' => $this->faker->numberBetween(0, 100000),
            'model' => CarsModel::factory(),
        ];
    }
}
