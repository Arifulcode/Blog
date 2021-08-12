<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use bcrypt;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Ariful Islalm',
            'email' =>'ariful@gmail.com',
            'password' =>bcrypt('123'),
        ]);
    }
}
