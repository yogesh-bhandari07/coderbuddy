<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'is_admin' => true,
            ],
            [
                'name' => 'Rahul Kumar',
                'email' => 'rahul@gmail.com',
                'password' => Hash::make('12345678'),
                'is_admin' => false,
            ],
            [
                'name' => 'Yogesh Kumar',
                'email' => 'yogesh@gmail.com',
                'password' => Hash::make('12345678'),
                'is_admin' => false,
            ],
        ]);
    }
}
