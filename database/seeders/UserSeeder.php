<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
          'name'=>'TestUser',
          'email'=>'sijanbartaula39@gmail.com',
          'remember_token' => Str::random(10),
          'password' => Hash::make('user1234'),
          'role_id'=>1



       ]);
    }
}
