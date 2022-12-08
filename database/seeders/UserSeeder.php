<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('`12qwaszx'),
            'role' => 'admin'
        ]);

        $user = User::create([
            'name' => 'The Beatles',
            'email' => 'user@thebeatles.com',
            'password' => Hash::make('`12qwaszx'),
            'role' => 'user'
        ]);
    }
}
