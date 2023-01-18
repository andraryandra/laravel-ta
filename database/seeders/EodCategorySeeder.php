<?php

namespace Database\Seeders;

use App\Models\EodCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        EodCategory::create([
            'name_categories' => 'EOD CALL'
        ]);

        EodCategory::create([
            'name_categories' => 'EOD SALES'
        ]);

        EodCategory::create([
            'name_categories' => 'EOD PAYMENT'
        ]);

        EodCategory::create([
            'name_categories' => 'EOD BIPROM'
        ]);

        EodCategory::create([
            'name_categories' => 'EOD STOCK'
        ]);

        EodCategory::create([
            'name_categories' => 'EOD SYNC'
        ]);

        EodCategory::create([
            'name_categories' => 'EOD VISIT'
        ]);
    }
}
