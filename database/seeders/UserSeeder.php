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
     */
    public function run(): void
    {
        // creo  un objeto de tipo usuario
        User::create([
            'name'=>'Juan',
            'email'=>'juan@hotmail.com',
            'password'=>Hash::make('12355678'),

        ]);
        User::create([
            'name'=>'Diego',
            'email'=>'diego@hotmail.com',
            'password'=>Hash::make('12355678'),

        ]);
        User::create([
            'name'=>'Maria',
            'email'=>'maria@gmail.com',
            'password'=>Hash::make('12355678'),

        ]);
        User::create([
            'name'=>'Jose',
            'email'=>'jose@hotmail.com',
            'password'=>Hash::make('12355678'),

        ]);
    }
}

