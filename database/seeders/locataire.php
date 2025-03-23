<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class locataire extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bougma Locataire',
            'email' => 'locataire@gmail.com',
            'password' => Hash::make('locataire123'),
            'role' => 'locataire',
        ]);
    }
}
