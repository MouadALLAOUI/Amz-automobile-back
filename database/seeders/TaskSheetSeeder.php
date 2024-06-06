<?php

namespace Database\Seeders;

use App\Models\Task_sheet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task_sheet::factory(1)->create();
    }
}
