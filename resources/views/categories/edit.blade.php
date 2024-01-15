@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
    <div class="container">
        <h1>Edit Category</h1>

        <form method="POST" action="{{ route('categories.update', $category->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="modalNom" class="form-label">Nom:</label>
                <input type="text" class="form-control" id="modalNom" name="Nom" value="{{ $category->Nom }}">
            </div>

            <!-- Add other form fields for updating -->
            <div class="mb-3">
                <label for="modalDescription" class="form-label">Description:</label>
                <input type="text" class="form-control" id="modalDescription" name="Description" value="{{ $category->Description }}">
            </div>

            <div class="mb-3">
                <label for="modalMarque" class="form-label">Marque:</label>
                <input type="text" class="form-control" id="modalMarque" name="Marque" value="{{ $category->Marque }}">
            </div>

            <div class="mb-3">
                <label for="modalModel" class="form-label">Model:</label>
                <input type="text" class="form-control" id="modalModel" name="Model" value="{{ $category->Model }}">
            </div>

            <div class="mb-3">
                <label for="modalSpecification" class="form-label">Specification:</label>
                <input type="text" class="form-control" id="modalSpecification" name="Specification" value="{{ $category->Specification }}">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </div>
        </form>
    </div>
@endsection
