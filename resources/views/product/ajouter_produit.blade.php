@extends('layouts.app')

@section('title', 'Articles')
@section('content')

<h1>Articles</h1>

<form action="/ajouter_produit" method="POST" class="mt-4">
    @csrf
    <div class="form-group">
        <label for="description"></label>
        <div class="input-group">
            <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                </svg>
                Ajouter Catégorie
            </a>
        </div>
    </div>
    <hr>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <ul>
        @foreach($errors->all() as $error)
            <li class="alert alert-danger">
                {{  $error  }}
            </li>
        @endforeach
    </ul>
    <!-- Modal -->
    <div class="modal" id="myModal" tabindex="-1">
        <!-- Modal content -->
    </div>
</form>
<hr>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Marque</th>
            <th>Model</th>
            <th>Specification</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $categories as  $categorie)
            <tr>
                <td>{{ $categorie->id}}</td>
                <td>{{ $categorie->Nom}}</td>
                <td>{{ $categorie->Description}}</td>
                <td>{{ $categorie->Marque}}</td>
                <td>{{ $categorie->Model}}</td>
                <td>{{ $categorie->Specification}}</td>
                <td>
                    <a href="/ajouter_produit/{{ $categorie->id }}" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#updateModal{{ $categorie->id }}">
                        Update
                    </a>
                    <a href="/ajouter_produit/{{ $categorie->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Model for "Modifier" -->
@foreach( $categories as  $categorie)
    <div class="modal" id="updateModal{{ $categorie->id }}" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger">
                                {{  $error  }}
                            </li>
                        @endforeach
                    </ul>
                    <!-- Form fields for updating -->
                    <form id="updateForm{{ $categorie->id }}" method="POST" onsubmit="submitForm(event, {{ $categorie->id }})">
                        @csrf
                        <!-- Update the form fields based on your requirements -->
                        <div class="mb-3">
                            <label for="modalNom" class="form-label">Nom:</label>
                            <input type="text" class="form-control" id="modalNom" name="Nom" value="{{ $categorie->Nom }}">
                        </div>
                        <!-- Add other form fields for updating -->
                        <div class="mb-3">
                            <label for="modalDescription" class="form-label">Description:</label>
                            <input type="text" class="form-control" id="modalDescription" name="Description" value="{{ $categorie->Description }}">
                        </div>
                        <div class="mb-3">
                            <label for="modalMarque" class="form-label">Marque:</label>
                            <input type="text" class="form-control" id="modalMarque" name="Marque" value="{{ $categorie->Marque }}">
                        </div>
                        <div class="mb-3">
                            <label for="modalModel" class="form-label">Model:</label>
                            <input type="text" class="form-control" id="modalModel" name="Model"  value="{{ $categorie->Model }}">
                        </div>
                        <div class="mb-3">
                            <label for="modalSpecification" class="form-label">Specification:</label>
                            <input type="text" class="form-control" id="modalSpecification" name="Specification" value="{{ $categorie->Specification }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

<!-- JavaScript to handle form submission asynchronously -->

@endsection
