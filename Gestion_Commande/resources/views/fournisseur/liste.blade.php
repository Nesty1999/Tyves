@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">Liste des fournisseurs</div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Tel</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Action</th>
                </tr>
                @foreach ($fournisseur as $fournisseur)
                <tr>
                    <td>{{$fournisseur->id}}</td>
                    <td>{{$fournisseur->nom}}</td>
                    <td>{{$fournisseur->prenom}}</td>
                    <td>{{$fournisseur->tel}}</td>
                    <td>{{$fournisseur->email}}</td>
                    <td>{{$fournisseur->adresse}}</td>
                    <td>
                        <a href="{{route('edit-client', $fournisseur->id)}}" class="btn btn-warning">Editer</a>
                        <a onclick="return confirm('Voullez-vous confirmer la suppression ?');" href="{{route('delate-fournisseur', $fournisseur->id)}}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
