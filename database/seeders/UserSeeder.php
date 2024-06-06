<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nom' => 'dev dev',
                'email' => 'dev@dev.com',
                'password' => Hash::make('dev'),
                'status' => 'DEV',
                'role_id' => 1,
            ],
            [
                'nom' => 'admin admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
                'status' => 'ADMIN',
                'role_id' => 2,
            ],
            [
                'nom' => 'employe employe',
                'email' => 'employe@employe.com',
                'password' => Hash::make('employe'),
                'status' => 'EMPLOYE',
                'role_id' => 3,
            ],
            [
                'nom' => 'user user',
                'email' => 'user@user.com',
                'password' => Hash::make('user'),
                'status' => 'USER',
                'role_id' => 4,
            ],
            [
                'nom' => 'user2 user2',
                'email' => 'user2@user.com',
                'password' => Hash::make('user'),
                'status' => 'USER',
                'role_id' => 4,
            ],
        ]);

        // User::factory(10)->create();
    }
}
