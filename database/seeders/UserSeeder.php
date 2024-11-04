<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'djib',
            'email' => 'djib@email.com',
            'password' => Hash::make('123456'), // Hash the password
            'role' => 'admin', // Set role to admin
        ]);
    }
}
