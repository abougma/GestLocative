<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function indexWelcome()
    {
        // Par exemple, récupérer des biens immobiliers à afficher dans la vue
        $biens = Bien::all(); // Bien sûr, il vous faut un modèle 'Bien' avec une table correspondante

        return view('welcome', compact('biens'));
    }
}
