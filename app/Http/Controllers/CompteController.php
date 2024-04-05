<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompteController extends Controller {
    public function modifyCompte() {
        $compte = Compte::find(Auth::user()->idcompte);

        return view('user.modify', ['compte' => $compte]);
    }

    public function doModifyCompte(Request $request) {
        $compte = Compte::find(Auth::user()->idcompte);

        if(Hash::check($request->input('password'), $compte->password)) {
            $compte->nom = $request->input('nom');
            $compte->prenom = $request->input('prenom');
            $compte->email = $request->input('email');
            $compte->adresse = $request->input('adresse');
            $compte->pays = $request->input('pays');
            $compte->tel = $request->input('telephone');
            if($request->input('new_password') === $request->input('new_password_confirmation')) {
                $compte->password = Hash::make($request->input('new_password'));
            }

            $compte->save();
        } else {
            return back()->with('error', 'Mot de passe incorrect.');
        }

        return view('user.modify', ['compte' => $compte]);
    }
}
