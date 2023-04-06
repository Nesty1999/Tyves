@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">Liste des clients</div>
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
                @foreach ($client as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->nom}}</td>
                    <td>{{$client->prenom}}</td>
                    <td>{{$client->tel}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->adresse}}</td>
                    <td>
                        <a href="{{route('edit-client', $client->id)}}" class="btn btn-warning">Editer</a>
                        <a onclick="return confirm('Voullez-vous confirmer la suppression ?');" href="{{route('delate-client', $client->id)}}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
