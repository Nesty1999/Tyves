<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.ajouter');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function liste()
    {
        $client = Client::all();
        return view('client.liste', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->tel = $request->tel;
        $client->email = $request->email;
        $client->adresse = $request->adresse;

        $client->save();
        return redirect()->back()->with('success', 'Client enregistré');

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
        $client= Client::find($id);
        return view('client.editer', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client= Client::find($id);
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->tel = $request->tel;
        $client->email = $request->email;
        $client->adresse = $request->adresse;
        $client->update();
        return redirect()->route('liste.client')->with('success', 'Client modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);
        $client->delete();
        return back();
    }
}
