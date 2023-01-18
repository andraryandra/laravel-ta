<?php

namespace Database\Seeders;

use App\Models\CategoriesRole;
use App\Models\StatusUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusUser::create([
            'status' => 1,
            'type_status' => 'InActive'
        ]);
        StatusUser::create([
            'status' => 2,
            'type_status' => 'Active'
        ]);
    }
}
