@extends('layouts.app')

@section('title', 'Categories')
@section('content')

<h1>Categories</h1>

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
    <div class="container">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @include('categories.form')

            </div>
        </div>
    </div>
</div>

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
    @foreach($categories->sortBy('id') as $categorie)
    <tr>
        <td>{{ $categorie->id }}</td>
        <td>{{ $categorie->Nom }}</td>
        <td>{{ $categorie->Description }}</td>
        <td>{{ $categorie->Marque }}</td>
        <td>{{ $categorie->Model }}</td>
        <td>{{ $categorie->Specification }}</td>
        <td>
            <div class="d-flex">
                <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-info">
                    Update
                </a>
                <form action="{{ route('categories.destroy', $categorie->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="Effacer" class="btn btn-danger"/>
                </form>
            </div>
        </td>
    </tr>
@endforeach

    </tbody>
</table>

<!-- JavaScript to handle form submission asynchronously -->

@endsection
