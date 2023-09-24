<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Super Admin',
            'email' => 'super@gmail.com',
            'password' => bcrypt('super'),
            'role' => 'super'
        ]);
        
        User::create([
            'name' => 'Admin QC IN',
            'email' => 'adminin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin_in'
        ]);

        User::create([
            'name' => 'User QC IN',
            'email' => 'userin@gmail.com',
            'password' => bcrypt('user'),
            'role' => 'user_in'
        ]);

        User::create([
            'name' => 'Admin QC Lane',
            'email' => 'adminlane@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin_lane'
        ]);

        User::create([
            'name' => 'User QC Lane',
            'email' => 'userlane@gmail.com',
            'password' => bcrypt('user'),
            'role' => 'user_lane'
        ]);

        User::create([
            'name' => 'Admin RTRW',
            'email' => 'adminrtrw@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin_rtrw'
        ]);

        User::create([
            'name' => 'User RTRW',
            'email' => 'userrtrw@gmail.com',
            'password' => bcrypt('user'),
            'role' => 'user_rtrw'
        ]);
    }
}
