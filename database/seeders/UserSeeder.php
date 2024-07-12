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
        $user = [
            'name' => 'Kelompok1',
            'email' => 'Kelompok1@gmail.com',
            'password' => \bcrypt('Kominfo123')
        ];

        User::insert($user);
    }
}
