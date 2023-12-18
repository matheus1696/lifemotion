<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        User::create([
            'name' => 'Administrador',
            'email' => 'matheus@hotmail.com',
            'email_verified_at' => now(),
            'birth' => now(),
            'sex' => 'Masculino',
            'password' => Hash::make('123456'),
            'remember_token' => Str::random(10),
        ]);
        User::factory(30)->create();
    }
}
