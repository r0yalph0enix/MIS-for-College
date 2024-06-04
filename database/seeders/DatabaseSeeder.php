<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            $this->call([
                RoleSeeder::class,
                UserSeeder::class
              ]);       
      
   
        // \App\Models\Role::factory()->count(1)->create([
        //     'role' => 'SuperAdmin',
        //     'description'=>'I am Super Admin'
        // ]);
        
        // \App\Models\User::factory()->count(1)->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'username'=>'user123',
        //     'password'=>'user123',
        //     'role_id'=> 1 

        // ]);
    }
}
