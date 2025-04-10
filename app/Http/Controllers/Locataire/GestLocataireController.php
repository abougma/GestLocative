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
}
