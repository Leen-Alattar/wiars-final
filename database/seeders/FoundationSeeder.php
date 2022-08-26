<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class FoundationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Hospital',
            'icon'=>'fa-hospital',
            'color'=>'#ff46',
            'description'=>'this is jordan hospital',
            'with_doses'=>1,
        
        ]);
    }
}
