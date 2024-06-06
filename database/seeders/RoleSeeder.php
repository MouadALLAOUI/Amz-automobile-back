<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'type' => 'DEV',
                'description' => "full controle, manage db, manage version, control users",
                "created_at" => "2024-06-22"
            ],
            [
                'type' => 'ADMIN',
                'description' => "full controle, control users, CRUD db",
                "created_at" => "2024-06-22"
            ],
            [
                'type' => 'EMPLOYE',
                'description' => "Read & update db",
                "created_at" => "2024-06-22"
            ],
            [
                'type' => 'CLIENT',
                'description' => "Read",
                "created_at" => "2024-06-22"
            ],
        ]);
    }
}
