<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            roleSeeder::class,
            userSeeder::class,
            // EmployerSeeder::class,
            // vehiculeSeeder::class,
            // TaskSeeder::class,
            // ClientSeeder::class,
            // TaskSheetSeeder::class,
            // OperationSeeder::class,
            // AutoPartSeeder::class,
        ]);
    }
}
