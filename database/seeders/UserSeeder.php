<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        /*'name'=> 'John Doe',
        'email'=> 'john@example.com',
        'password'> bcrypt('password'),
        'role'=>'1',*/

        
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password'=> bcrypt('password'),
            'role' => 1,
        
        

        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => bcrypt('password'),
            'role' => 2, // Normal user role
        ]);
    }
}
