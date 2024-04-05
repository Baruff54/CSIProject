<?php

namespace App\Http\Controllers;

use App\Models\Accompagnateur;
use App\Models\Auteur;
use App\Models\Compte;
use App\Models\Gestionnaire;
use App\Models\Interprete;
use App\Models\Referent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class ConnectionController extends Controller
{
    public function login() {
        return view('user.login');
    }

    public function doLogin(Request $request) {
        $credentials = $request->all(['email', 'password']);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended();
        }

        return back()->with('error', 'Identifiant incorrect.');
    }

    public function signUp() {
        return view('user.signUp');
    }

    public function doSignUp(Request $request) {
        if($request->input('password') !== $request->input('password_confirmation')) {
            return back()->with('error', "Mot de passe différent");
        }

        $compte = new Compte();
        $compte->nom = $request->input('nom');
        $compte->prenom = $request->input('prenom');
        $compte->email = $request->input('email');
        $compte->adresse = $request->input('adresse');
        $compte->pays = $request->input('pays');
        $compte->password = Hash::make($request->input('password'));

        $compte->save();

        $role = $request->get('role');

        switch ($role) {
            case "auteur":
                $auteur = new Auteur();
                $auteur->idcompte = $compte->idcompte;
                break;
            case 'referent':
                $referent = new Referent();
                $referent->idcompte = $compte->idcompte;
                break;
            case 'accompagnateur':
                $accomp = new Accompagnateur();
                $accomp->idcompte = $compte->idcompte;
                $accomp->save();
                break;
            case 'interprete':
                $inter = new Interprete();
                $inter->idcompte = $compte->idcompte;
                $inter->save();
                break;
            case 'gestionnaire':
                $gest = new Gestionnaire();
                $gest->idcompte = $compte->idcompte;
                $gest->save();
                break;
        }

        return redirect()->route('login');
    }

    public function logOut() {
        Auth::logout();

        return redirect()->route('accueil');
    }
}
