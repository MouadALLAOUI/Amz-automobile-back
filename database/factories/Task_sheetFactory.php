<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Task;
use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task_sheet>
 */
class Task_sheetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'num_matricule' => $this->faker->word,
            'entree' => $this->faker->dateTime(),
            'sortie' => $this->faker->optional()->dateTime(),
            'info' => $this->faker->text,
            'vehicule_id' => Vehicule::factory(),
            'client_id' => Client::factory(),
            'task_id' => Task::factory(),
        ];
    }
}
