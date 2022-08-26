<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        /*
        	id	name	email	email_verified_at	date_of_birth	national_num	password	remember_token	role_id	created_at	updated_at	*/
        User::create([
            'name'=>'leen Nasser Alattar',
            'email'=>'leen@gmail.com',
            'date_of_birth'=>'2000/08/01',
            'national_num'=>12312345,
            'password'=>Hash::make('12312345'),
            'role_id'=>2,
            'is_vaccine'=>1
        ]);


  
        User::create([
            'name'=>'Fuad Anwar Dawood',
            'email'=>'fuad@gmail.com',
            'date_of_birth'=>'2000/08/01',
            'national_num'=>123456789,
            'password'=>Hash::make('123456789'),
            'role_id'=>1,
            'is_vaccine'=>1

        ]);
        User::create([
            'name'=>'Tala Nasser Alattar',
            'email'=>'tala@gmail.com',
            'date_of_birth'=>'2004/08/01',
            'national_num'=>2000111,
            'password'=>Hash::make('2000111'),
            'role_id'=>2,
            'is_vaccine'=>0

        ]);
    }
}
