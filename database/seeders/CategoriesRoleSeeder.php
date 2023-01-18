<?php

namespace Database\Seeders;

use App\Models\CategoriesRole;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriesRole::create([
            'role' => 1,
            'type_role' => 'administrator',
        ]);

        CategoriesRole::create([
            'role' => 2,
            'type_role' => 'admin',
        ]);

        CategoriesRole::create([
            'role' => 3,
            'type_role' => 'fls',
        ]);
    }
}
