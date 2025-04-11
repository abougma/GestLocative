<?php

namespace App\Http\Controllers\Locataire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestLocataireController extends Controller
{
    public function dashboardLocataire()
    {
        return view('front-office.pages.locataire.dashboard');
    }

    public function signalementLocataire()
    {
        return view('front-office.pages.locataire.signalement');
    }

    public function compteLocataire()
    {
        return view('front-office.pages.locataire.compte');
    }

    public function messageLocataire()
    {
        return view('front-office.pages.locataire.message');
    }
}
