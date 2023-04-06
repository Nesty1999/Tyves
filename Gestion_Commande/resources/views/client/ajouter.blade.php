@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{session('success')}}
    </div>
    @endif
     <div class="card">
        <div class="card-header bg-primary text-white">Ajouter un client</div>
        <div class="card-body">
            <form action="{{route('store.client')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nom :</label>
                    <input type="text" name="nom" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Prénom :</label>
                    <input type="text" name="prenom" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Adresse :</label>
                    <input type="text" name="adresse" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tel :</label>
                    <input type="text" name="tel" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email :</label>
                    <input type="text" name="email" id="" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Ajouter</button>
                </div>
            </form>
        </div>
     </div>
</div>