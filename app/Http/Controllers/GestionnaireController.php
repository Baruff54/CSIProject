<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use App\Models\Gestionnaire;
use App\Models\Langue;
use App\Models\Ouvrage;
use Illuminate\Http\Request;

class GestionnaireController extends Controller {

    // Gestion Ouvrage

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

    public function deleteOuvrage(Request $request) {
        $ouvrage = Ouvrage::find($request->input('idOuvrage'));
        $ouvrage->delete();
        return back()->with('success', 'Suppression effectué avec succès.');
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

    // Gestion établissement

    public function showAllEtab() {
        return view('dashboard.etablissement.show', ['etablissements' => Etablissement::all()]);
    }

    public function createEtab() {
        $type = [
            "universite" => 'Université',
            "lycee_general" => 'Lycée général',
            "lycee_professionnel" => 'Lycée professionnel',
            "college" => 'Collège',
            "ecole_primaire" => 'Ecole primaire',
            "ecole_maternelle" => 'Ecole maternelle',
            "medico_sociaux" => 'Médico sociaux',
            "penitentiaire" => 'Pénitentiaire',
        ];

        return view('dashboard.etablissement.create', ['typeEtab' => $type]);
    }

    public function doCreateEtab(Request $request) {
        $etablissement = new Etablissement();

        $etablissement->nom = $request->input('nom');
        $etablissement->typeetablissement = $request->input('typeEtablissement');
        $etablissement->ville = $request->input('ville');
        $etablissement->adresse = $request->input('adresse');
        $etablissement->nombrevoeux = 0;

        $etablissement->save();

        return back()->with('success', 'Création effectué avec succès.');
    }

    public function deleteEtab(Request $request) {
        $etablissement = Etablissement::find($request->input('idEtablissement'));
        $etablissement->delete();
        return back()->with('success', 'Suppression effectué avec succès.');
    }

    public function modifyEtab(Etablissement $etablissement) {
        $type = [
            "universite" => 'Université',
            "lycee_general" => 'Lycée général',
            "lycee_professionnel" => 'Lycée professionnel',
            "college" => 'Collège',
            "ecole_primaire" => 'Ecole primaire',
            "ecole_maternelle" => 'Ecole maternelle',
            "medico_sociaux" => 'Médico sociaux',
            "penitentiaire" => 'Pénitentiaire',
        ];
        return view('dashboard.etablissement.modify', ['etablissement' => $etablissement, 'typeEtab' => $type]);
    }

    public function doModifyEtab(Etablissement $etablissement, Request $request) {
        $etablissement->nom = $request->input('nom');
        $etablissement->typeetablissement = $request->input('typeEtab');
        $etablissement->ville = $request->input('ville');
        $etablissement->adresse = $request->input('adresse');

        $etablissement->save();

        return redirect()->route('gestionnaire.etablissement.show')->with('success', 'La modification à bien été effectué.');
    }
}
