<?php

use App\Http\Controllers\CompteController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\GestionnaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('accueil');

Route::get('/signup', [ConnectionController::class, 'signUp'])->name("signUp");
Route::post('/signup', [ConnectionController::class, 'doSignUp']);
Route::get('/login', [ConnectionController::class, 'login'])->name("login");
Route::post('/login', [ConnectionController::class, 'doLogin']);
Route::post('/logout', [ConnectionController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('/compte')->name('compte.')->group(function () {
        Route::get('/modify', [CompteController::class, 'modifyCompte'])->name("modify");
        Route::post('/modify', [CompteController::class, 'doModifyCompte']);
    });

    Route::prefix('/gestionnaire')->name('gestionnaire.')->group(function () {
        Route::prefix('/ouvrage')->name('ouvrage.')->group(function () {
            Route::get('/create', [GestionnaireController::class, 'createOuvrage'])->name('create');
            Route::post('/create', [GestionnaireController::class, 'doCreateOuvrage']);

            Route::get('/modify/{ouvrage}', [GestionnaireController::class, 'modifyOuvrage'])->name('modify');
            Route::post('/modify/{ouvrage}', [GestionnaireController::class, 'doModifyOuvrage']);

            Route::delete('/show', [GestionnaireController::class, 'delete']);
            Route::get('/show', [GestionnaireController::class, 'showAllOuvrage'])->name('show');
        });
    });
});
