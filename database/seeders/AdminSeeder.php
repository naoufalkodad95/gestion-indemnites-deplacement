<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;



class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // admin:user
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt('password'),
            'is_admin'=>1
        ]);
        //test user
        User::create([
        'name'=>'test',
        'email'=>'test@gmail.com',
        'email_verified_at'=>now(),
        'password'=>bcrypt('password'),
        'is_admin'=>0
    ]);

    }
}
