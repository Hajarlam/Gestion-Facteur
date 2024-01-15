<!-- resources/views/tenant_societes/show.blade.php -->

@extends('layouts.app')

@section('title', 'Détails du Tenant Societe')

@section('content')
    <div class="container">
        <h1>Détails du Tenant Societe</h1>

        <div>
            <strong>ID:</strong> {{ $tenantSociete->id }}<br>
            <strong>Nom Societe:</strong> {{ $tenantSociete->nom_societe }}<br>
            <strong>Adresse:</strong> {{ $tenantSociete->adresse_tenant_societe }}<br>
            <strong>Email:</strong> {{ $tenantSociete->email_societe }}<br>
            <strong>Téléphone:</strong> {{ $tenantSociete->telephone_societe }}<br>
            <strong>Site Web:</strong> {{ $tenantSociete->siteweb_societe }}<br>
            <strong>ICE:</strong> {{ $tenantSociete->ice_societe }}<br>
            <strong>RC:</strong> {{ $tenantSociete->rc_societe }}<br>
            <!-- Add other fields as needed -->
        </div>

        <a href="{{ route('tenant_societes.index') }}">Retour à la liste</a>
    </div>
@endsection
