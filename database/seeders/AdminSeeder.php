<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'account_type' => 'Administrator',
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'admin@resourceindeed.com',
            'password' => bcrypt('Password'),
            'created_at' => date("d-m-Y", time()), // current date
            'updated_at' => date("h:i:s", time()) // current time
        ]);
    }
}
