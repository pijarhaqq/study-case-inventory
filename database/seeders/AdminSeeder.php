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
        $user = User::create([
            'name' => 'Coba',
            'username' => 'coba',
            'avatar' => 'avatar.png',
            'isAdmin' => true,
            'isActive' => true,
            'password' => '12345678'
        ]);
    }
}
