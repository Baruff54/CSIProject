<?php

namespace App\Http\Controllers;

use App\Models\Gestionnaire;
use App\Models\Langue;
use App\Models\Ouvrage;
use Illuminate\Http\Request;

class GestionnaireController extends Controller {
    public function showAllOuvrage() {
        return view('dashboard.ouvrage.show', ['ouvrages' => Ouvrage::all()]);
    }

    public function createOuvrage() {
        return view('dashboard.ouvrage.create', ['langues' => Langue::all()]);
    }

    public function doCreateOuvrage(Request $request) {
        $ouvrage = new Ouvrage();

        $ouvrage->titre = $request->input('titre');
        $ouvrage->typepublic = $request->input('typePublic');
        $ouvrage->classe = $request->input('classe');
        $ouvrage->codelangue = $request->input('langue');

        $ouvrage->save();

        return view('dashboard.ouvrage.create', ['langues' => Langue::all()]);
    }

    public function delete(Request $request) {
        $ouvrage = Ouvrage::find($request->input('idOuvrage'));
        $ouvrage->delete();
        return back()->with('success', 'Action effectué avec succès.');
    }

    public function modifyOuvrage(Ouvrage $ouvrage) {
        return view('dashboard.ouvrage.modify', ['langues' => Langue::all(), 'ouvrage' => $ouvrage]);
    }

    public function doModifyOuvrage(Ouvrage $ouvrage, Request $request) {
        $ouvrage->titre = $request->input('titre');
        $ouvrage->typepublic = $request->input('typePublic');
        $ouvrage->classe = $request->input('classe');
        $ouvrage->codelangue = $request->input('langue');

        $ouvrage->save();

        return redirect()->route('gestionnaire.ouvrage.show');
    }
}
