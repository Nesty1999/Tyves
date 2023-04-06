<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('fournisseur.ajouter');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function liste()
    {
        $fournisseur =Fournisseur::all();
        return view('fournisseur.liste', compact('fournisseur'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fournisseur = new Fournisseur();
        $fournisseur->nom = $request->nom;
        $fournisseur->prenom = $request->prenom;
        $fournisseur->tel = $request->tel;
        $fournisseur->email = $request->email;
        $fournisseur->adresse = $request->adresse;

        $fournisseur->save();
        return redirect()->back()->with('success', 'Fournisseur enregistré');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fournisseur= Fournisseur::find($id);
        return view('fournisseur.editer', compact('fournisseur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fournisseur= Fournisseur::find($id);
        $fournisseur->nom = $request->nom;
        $fournisseur->prenom = $request->prenom;
        $fournisseur->tel = $request->tel;
        $fournisseur->email = $request->email;
        $fournisseur->adresse = $request->adresse;
        $fournisseur->update();
        return redirect()->route('liste.fournisseur')->with('success', 'Fournisseur modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fournisseur = Fournisseur::find($id);
        $fournisseur->delete();
        return back();
    }
}
