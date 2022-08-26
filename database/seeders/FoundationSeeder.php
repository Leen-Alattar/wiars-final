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
            'color'=>'#FF580E;',
            'description'=>'this is jordan hospital',
            'with_doses'=>0,
        
        ]);
        Category::create([
            'name'=>'University',
            'icon'=>'fa-university',
            'color'=>'#FF580E;',
            'description'=>'this is jordan hospital',
            'with_doses'=>1,
        
        ]);
        Category::create([
            'name'=>'School',
            'icon'=>'fa-school',
            'color'=>'#FF580E;',
            'description'=>'this is jordan hospital',
            'with_doses'=>0,
        
        ]);
        Category::create([
            'name'=>'Airport',
            'icon'=>'fa-plane',
            'color'=>'#FF580E;',
            'description'=>'this is jordan hospital',
            'with_doses'=>1,
        
        ]);
        Category::create([
            'name'=>'Restarant',
            'icon'=>'fa-utensils',
            'color'=>'#FF580E;',
            'description'=>'this is jordan hospital',
            'with_doses'=>1,
        
        ]);
        Category::create([
            'name'=>'Factories',
            'icon'=>'fa-building',
            'color'=>'#FF580E;',
            'description'=>'this is jordan hospital',
            'with_doses'=>1,
        
        ]);
        Category::create([
            'name'=>'Malls',
            'icon'=>'fa-city',
            'color'=>'#FF580E;',
            'description'=>'this is jordan hospital',
            'with_doses'=>1,
        
        ]);
        Category::create([
            'name'=>'Shops',
            'icon'=>'fa-shopping-basket',
            'color'=>'#FF580E;',
            'description'=>'this is jordan hospital',
            'with_doses'=>0,
        
        ]);
        Category::create([
            'name'=>'Coffee Shop',
            'icon'=>'fa-coffee',
            'color'=>'#FF580E;',
            'description'=>'this is jordan hospital',
            'with_doses'=>1,
        
        ]);
        Category::create([
            'name'=>'Mosque',
            'icon'=>'fa-mosque',
            'color'=>'#FF580E;',
            'description'=>'this is jordan hospital',
            'with_doses'=>0,
        
        ]);
        Category::create([
            'name'=>'Gym',
            'icon'=>'fa-dumbbell',
            'color'=>'#FF580E;',
            'description'=>'this is jordan hospital',
            'with_doses'=>1,
        
        ]);
  
    }
}
