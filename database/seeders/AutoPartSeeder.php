<?php

namespace Database\Seeders;

use App\Models\Auto_part;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutoPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Auto_part::factory(1)->create();
    }
}
