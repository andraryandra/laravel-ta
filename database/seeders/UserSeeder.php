<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id_role' => 1,
            'id_status_user' => 2,
            'username' => 'administrator',
            'name' => 'administrator',
            'email' => 'administrator@admin.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'id_role' => 2,
            'id_status_user' => 2,
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'id_role' => 3,
            'id_status_user' => 2,

            'name' => 'andra',
            'username' => 'andra',
            'email' => 'andra@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
