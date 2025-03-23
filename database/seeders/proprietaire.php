<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class proprietaire extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom' => 'Bougma proprietaire',
            'email' => 'proprietaire@gmail.com',
            'mot_de_passe' =>  Hash::make('proprietaire123'),
            'role' => 'candidatLoc',
        ]);
    }
}
