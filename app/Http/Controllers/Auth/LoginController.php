<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';
    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'candidatLoc') {
            return redirect()->route('candidatLocataire.dashboard');
        } elseif ($user->role === 'gestionnaire') {
            return redirect()->route('gestionnaire.dashboard');
        } elseif ($user->role === 'locataire') {
            return redirect()->route('locataire.dashboard');
        } elseif ($user->role === 'proprietaire') {
            return redirect()->route('proprietaire.dashboard');
        }

        return redirect('/welcome'); // Redirection par défaut

    }

    /**
     * Handle a failed login attempt.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->route('login')
            ->withErrors(['email' => 'Les informations de connexion sont incorrectes.'])
            ->withInput();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
