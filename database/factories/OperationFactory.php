<?php

namespace Database\Factories;

use App\Models\Task_sheet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Operation>
 */
class OperationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task_sheet_id' => Task_sheet::factory(),
            'tps' => $this->faker->word,
            'operations_realisees' => $this->faker->text,
            'observations' => $this->faker->text,
        ];
    }
}
