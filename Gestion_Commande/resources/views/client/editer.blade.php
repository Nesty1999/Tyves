@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{session('success')}}
    </div>
    @endif
     <div class="card">
        <div class="card-header bg-primary text-white">Editer un client</div>
        <div class="card-body">
            <form action="{{route('update.client', $client->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nom :</label>
                    <input type="text" name="nom" id="" class="form-control" value="{{$client->nom}}">
                </div>
                <div class="form-group">
                    <label for="">Prénom :</label>
                    <input type="text" name="prenom" id="" class="form-control" value="{{$client->prenom}}">
                </div>
                <div class="form-group">
                    <label for="">Adresse :</label>
                    <input type="text" name="adresse" id="" class="form-control" value="{{$client->adresse}}">
                </div>
                <div class="form-group">
                    <label for="">Tel :</label>
                    <input type="text" name="tel" id="" class="form-control" value="{{$client->tel}}">
                </div>
                <div class="form-group">
                    <label for="">Email :</label>
                    <input type="text" name="email" id="" class="form-control" value="{{$client->email}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Modifier</button>
                </div>
            </form>
        </div>
     </div>
</div>