<?php

use App\Http\Controllers\CandidatLocataire\DashboardController;
use App\Http\Controllers\Gestionnaire\GestGestionnaireController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'indexWelcome']);

//Candidat Locataire
Route::prefix('candidatLocataire')->group(function () {

    Route::get('/logout', [LogoutController::class, 'logoutCandidatLocataire'])->name('pages.logoutCandidatLocataire');

    Route::middleware(['auth', 'role:candidatLoc'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboardCandidatLocataire'])
            ->name('candidatLocataire.dashboard');
    });

});

//gestionnaire
Route::prefix('gestionnaire')->group(function () {

    Route::middleware(['auth', 'role:gestionnaire'])->group(function () {
        Route::get('/dashboard', [GestGestionnaireController::class, 'dashboardGestionnaire'])->name('gestionnaire.dashboard');
        Route::get('/mesBiens', [GestGestionnaireController::class, 'biensGestionnaire'])->name('gestionnaire.biens');
        Route::post('/mesBiens', [GestGestionnaireController::class, 'biensGestionnaireStore'])->name('gestionnaire.biens.store');
        Route::get('/bien/{id}/delete', [GestGestionnaireController::class, 'deleteBien'])->name('gestionnaire.bien.delete');


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
        Route::get('/assurance', [GestLocataireController::class, 'assuranceLocataire'])->name('locataire.assurance');
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
