@extends('layouts.app')

@section('title', 'Articles')
@section('content')
<style>
    /* Ajoutez vos styles CSS ici */
</style>

<h1>Liste des Articles</h1>

@if ($errors->any())
    <div>
        <strong>Erreur:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="Nom">Nom de l'article</label>
        <input type="text" class="form-control" name="Nom" id="Nom" required>
    </div>
    <div class="form-group">
        <label for="Nom">Description</label>
        <input type="text" class="form-control" name="Description" id="Description" required>
    </div>
    <div class="form-group">
        <label for="Nom">Prix unitaire HT</label>
        <input type="text" class="form-control" name="PrixUnitaire_HT" id="PrixUnitaire_HT" required>
    </div>
    <div class="form-group">
        <label for="Nom">Quantité</label>
        <input type="text" class="form-control" name="Quantite" id="Quantite" required>
    </div>
    <div class="form-group">
        <label for="Nom">Date de création</label>
        <input type="date" class="form-control" name="DateCreation" id="DateCreation" required>
    </div>
    <div class="form-group">
        <label for="Nom">Photo</label>
        <input type="file" class="form-control" name="Photo" id="Photo" required>
    </div>
    <div class="form-group">
        <label for="Nom">Catégorie ID</label>
        <input type="text" class="form-control" name="Categorie" id="Categorie" required>
    </div>
    <!-- Ajoutez d'autres champs du formulaire selon vos besoins -->

    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom de l'article</th>
            <th>Description</th>
            <th>Prix unitaire HT</th>
            <th>Quantité</th>
            <th>Date de création</th>
            <th>Photo</th>
            <th>Catégorie ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->Nom }}</td>
                <td>{{ $article->Description }}</td>
                <td>{{ $article->PrixUnitaire_HT }}</td>
                <td>{{ $article->Quantite }}</td>
                <td>{{ $article->DateCreation }}</td>
                <td>{{ $article->Photo }}</td>
                <td>{{ $article->Categorie }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
