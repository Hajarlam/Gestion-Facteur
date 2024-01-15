@extends('layouts.app')

@section('title', 'Edit Quittance')

@section('content')
    <div class="container mt-5">
        <h1>Edit Quittance</h1>

        <form action="{{ route('quittances.update', $quittance->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="tenant_societe_id">Tenant Societe ID:</label>
                <input type="text" class="form-control" name="tenant_societe_id" value="{{ old('tenant_societe_id', $quittance->tenant_societe_id) }}" required>
                @error('tenant_societe_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <label for="client_societe_id">Client Societe ID:</label>
        <input type="text" name="client_societe_id" value="{{ old('client_societe_id') }}">
        @error('client_societe_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="date_creation">Date Creation:</label>
        <input type="text" name="date_creation" value="{{ old('date_creation') }}">
        @error('date_creation')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="date_validation">Date Validation:</label>
        <input type="text" name="date_validation" value="{{ old('date_validation') }}">
        @error('date_validation')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="montant_total">Montant Total:</label>
        <input type="text" name="montant_total" value="{{ old('montant_total') }}">
        @error('montant_total')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="avance">Avance:</label>
        <input type="text" name="avance" value="{{ old('avance') }}">
        @error('avance')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="reste">Reste:</label>
        <input type="text" name="reste" value="{{ old('reste') }}">
        @error('reste')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="mode_paiement">Mode Paiement:</label>
        <input type="text" name="mode_paiement" value="{{ old('mode_paiement') }}">
        @error('mode_paiement')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="reference_quittance">Reference Quittance:</label>
        <input type="text" name="reference_quittance" value="{{ old('reference_quittance') }}">
        @error('reference_quittance')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <!-- Repeat similar structure for other form fields -->

            <button type="submit" class="btn btn-primary">Update Quittance</button>
        </form>
    </div>
@endsection
