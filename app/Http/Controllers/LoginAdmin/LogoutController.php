<?php

namespace App\Http\Controllers\LoginAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logoutCandidatLocataire()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }

}
