<?php

use App\Http\Controllers\CandidatLocataire\DashboardController;
use App\Http\Controllers\Locataire\GestLocataireController;
use App\Http\Controllers\LoginAdmin\LogoutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Candidat Locataire
Route::prefix('candidatLocataire')->group(function () {

    Route::get('/logout', [LogoutController::class, 'logoutCandidatLocataire'])->name('pages.logoutCandidatLocataire');

    Route::middleware(['auth', 'role:candidatLoc'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboardCandidatLocataire'])
            ->name('candidatLocataire.dashboard');
    });

});

//Gestionnaire
Route::prefix('gestionnaire')->group(function () {

    Route::middleware(['auth', 'role:gestionnaire'])->group(function () {

    });
});

//Locataire
Route::prefix('locataire')->group(function () {

    Route::middleware(['auth', 'role:locataire'])->group(function () {
        Route::get('/dashboard/', [GestLocataireController::class, 'dashboardLocataire'])->name('locataire.dashboard');
        Route::get('/accueil/', [GestLocataireController::class, 'accueilLocataire'])->name('locataire.accueil');
        Route::get('/signalement', [GestLocataireController::class, 'signalementLocataire'])->name('locataire.signalement');
        Route::get('/compte', [GestLocataireController::class, 'compteLocataire'])->name('locataire.compte');
        Route::get('/message', [GestLocataireController::class, 'messageLocataire'])->name('locataire.message');
        Route::get('/documents', [GestLocataireController::class, 'documentLocataire'])->name('locataire.documents');
    });

});




//Proprietaire
Route::prefix('propriétaire')->group(function () {

    Route::middleware(['auth', 'role:proprietaire'])->group(function () {

    });
});


//SuperUser
Route::prefix('superUser')->group(function () {
    Route::middleware(['auth', 'role:superUser'])->group(function () {

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
