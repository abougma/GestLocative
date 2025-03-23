<?php

namespace App\Http\Controllers\CandidatLocataire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardCandidatLocataire (){
        return view('front-office.pages.candidatLocataire.dashboard');
    }
}
