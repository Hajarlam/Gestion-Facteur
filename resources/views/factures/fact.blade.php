@extends('layouts.app')

@section('title', 'Facture')
@section('content')
    <h1>Facture</h1>
    <div class="form-group">
    <div class="input-group">
        <a type="button" class="btn btn-primary me-5" data-bs-toggle="modal" data-bs-target="#myModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
            </svg>
            Ajouter Facture
        </a>
        
        <a href="{{ route('factures.show', ['facture' => 1]) }}" type="button" class="btn btn-success mx-1">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
    </svg>
    Exporter <b>PDF</b>
</a>
<script>$(document).ready(function () {
    $('#factureTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'pdf'
        ]
    });
});
</script>

    </div>
</div>

<hr>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="modal" id="myModal" tabindex="-1">
    <div class="container">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form id
method="POST" action="{{ route('factures.store') }}">
                        @csrf
                        <!-- Update the form fields based on your requirements -->
                        <div class="mb-3">
    <label for="modalFactureId" class="form-label">Facture ID:</label>
    <input type="text" class="form-control" id="modalFactureId" name="FactureId" value="{{ old('FactureId') }}">
</div>

                        <div class="mb-3">
        <label for="modalDevisId" class="form-label">Devis ID:</label>
        <input type="text" class="form-control" id="modalDevisId" name="DevisId" value="{{ old('DevisId') }}">
    </div>
    <div class="mb-3">
        <label for="modalClientId" class="form-label">Client ID:</label>
        <input type="text" class="form-control" id="modalClientId" name="ClientId" value="{{ old('ClientId') }}">
    </div>
    <div class="mb-3">
        <label for="modalDateCreation" class="form-label">Date de Création:</label>
        <input type="date" class="form-control" id="modalDateCreation" name="DateCreation" value="{{ old('DateCreation') }}">
    </div>
    <div class="mb-3">
        <label for="modalDateEcheance" class="form-label">Date d'Echéance:</label>
        <input type="date" class="form-control" id="modalDateEcheance" name="DateEcheance" value="{{ old('DateEcheance') }}">
    </div>
    <div class="mb-3">
        <label for="modalMontantHT" class="form-label">Montant HT:</label>
        <input type="text" class="form-control" id="modalMontantHT" name="Montant_HT" value="{{ old('Montant_HT') }}">
    </div>
    <div class="mb-3">
        <label for="modalMontantTotal" class="form-label">Montant Total:</label>
        <input type="text" class="form-control" id="modalMontantTotal" name="Montant_Total" value="{{ old('Montant_Total') }}">
    </div>
    <div class="mb-3">
        <label for="modalAvance" class="form-label">Avance:</label>
        <input type="text" class="form-control" id="modalAvance" name="Avance" value="{{ old('Avance') }}">
    </div>
    <div class="mb-3">
        <label for="modalReste" class="form-label">Reste:</label>
        <input type="text" class="form-control" id="modalReste" name="Reste" value="{{ old('Reste') }}">
    </div>
    <div class="mb-3">
        <label for="modalStatutPaiement" class="form-label">Statut de Paiement:</label>
        <input type="text" class="form-control" id="modalStatutPaiement" name="StatutPaiement" value="{{ old('StatutPaiement') }}">
    </div>
    <div class="mb-3">
        <label for="modalModePaiement" class="form-label">Mode de Paiement:</label>
        <input type="text" class="form-control" id="modalModePaiement" name="ModePaiement" value="{{ old('ModePaiement') }}">
    </div>
    <div class="mb-3">
        <label for="modalInfosPaiement" class="form-label">Infos de Paiement:</label>
        <input type="text" class="form-control" id="modalInfosPaiement" name="InfosPaiement" value="{{ old('InfosPaiement') }}">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">D'accord</button>
    </div>


</form>
            </div>
        </div>
    </div>
</div>
<hr>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Facture ID </th>

            <th>Devis ID</th>
            <th>Client ID</th>
            <th>Date de Création</th>
            <th>Date d'Echéance</th>
            <th>Montant HT</th>
            <th>Montant Total</th>
            <th>Avance</th>
            <th>Reste </th>
            <th>Statut de Paiement </th>
            <th>Mode de Paiement </th>
            <th>Infos de Paiement:</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($factures as $facture)
    <tr>
        <td>{{ $facture->id }}</td>
        <td>{{ $facture->FactureId }}</td>
        <td>{{ $facture->DevisId }}</td>
        <td>{{ $facture->ClientId }}</td>
        <td>{{ $facture->DateCreation }}</td>
        <td>{{ $facture->DateEcheance }}</td>
        <td>{{ $facture->Montant_HT }}</td>
        <td>{{ $facture->Montant_Total }}</td>
        <td>{{ $facture->Avance }}</td>
        <td>{{ $facture->Reste }}</td>
        <td>{{ $facture->StatutPaiement }}</td>
        <td>{{ $facture->ModePaiement }}</td>
        <td>{{ $facture->InfosPaiement }}</td>
        <td>
    <a href="{{ route('factures.edit', $facture->id) }}" class="btn btn-info">Modifier</a>
</td>
<td>
    <form action="{{ route('factures.destroy', $facture->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Confirmer la suppression ?')">Supprimer</button>
    </form>
</td>
    </tr>
@endforeach

</tbody>

</table>
@endsection
