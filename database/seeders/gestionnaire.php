<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class gestionnaire extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bougma Gestionnaire',
            'email' => 'gestionnaire@gmail.com',
            'password' => Hash::make('gestionnaire123'),
            'role' => 'gestionnaire',
        ]);
    }
}
