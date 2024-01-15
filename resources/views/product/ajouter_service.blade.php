<!-- resources/views/service.blade.php -->

@extends('layouts.app')

@section('title', 'Service')
@section('content')
    <h1>Service</h1>
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Nom">Nom du Service</label>
            <input type="text" class="form-control" name="Nom" id="Nom" required>
        </div>
        <div class="form-group">
            <label for="description">Description du Service</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="Nom">Composants</label>
            <input type="text" class="form-control" name="Composants" id="Composants" required>
        </div>
        <div class="form-group">
            <label for="Nom">Prix unitaire HT </label>
            <input type="text" class="form-control" name="PrixUnitaire_HT" id="PrixUnitaire_HT" required>
        </div>
        <div class="form-group">
            <label for="Nom">Unité</label>
            <input type="text" class="form-control" name="Unite" id="Unite" required>
        </div>
        <div class="form-group">
            <label for="Nom">Date Création</label>
            <input type="date" class="form-control" name="DateCreation" id="DateCreation" required>
        </div>
        <div class="form-group">
            <label for="Nom">Pack Id</label>
            <input type="text" class="form-control" name="PackId" id="PackId" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
