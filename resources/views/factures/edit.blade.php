@extends('layouts.app')

@section('title', 'Edit Facture')

@section('content')
    <div class="container">
        <h1>Edit Facture</h1>

        <form method="POST" action="{{ route('factures.update', ['facture' => $facture->id]) }}">
            @csrf
            @method('PUT')
                        <!-- Update the form fields based on your requirements -->
                        <div class="mb-3">
    <label for="modalFactureId" class="form-label">Facture ID:</label>
    <input type="text" class="form-control" id="modalFactureId" name="FactureId" value="{{ $facture->FactureId }}">
</div>

                        <div class="mb-3">
        <label for="modalDevisId" class="form-label">Devis ID:</label>
        <input type="text" class="form-control" id="modalDevisId" name="DevisId" value="{{  $facture->DevisId }}">
    </div>
    <div class="mb-3">
        <label for="modalClientId" class="form-label">Client ID:</label>
        <input type="text" class="form-control" id="modalClientId" name="ClientId" value="{{  $facture->ClientId  }}">
    </div>
    <div class="mb-3">
        <label for="modalDateCreation" class="form-label">Date de Création:</label>
        <input type="date" class="form-control" id="modalDateCreation" name="DateCreation" value="{{  $facture->DateCreation }}">
    </div>
    <div class="mb-3">
        <label for="modalDateEcheance" class="form-label">Date d'Echéance:</label>
        <input type="date" class="form-control" id="modalDateEcheance" name="DateEcheance" value="{{  $facture->DateEcheance  }}">
    </div>
    <div class="mb-3">
        <label for="modalMontantHT" class="form-label">Montant HT:</label>
        <input type="text" class="form-control" id="modalMontantHT" name="Montant_HT" value="{{  $facture->Montant_HT  }}">
    </div>
    <div class="mb-3">
        <label for="modalMontantTotal" class="form-label">Montant Total:</label>
        <input type="text" class="form-control" id="modalMontantTotal" name="Montant_Total" value="{{  $facture->Montant_Total  }}">
    </div>
    <div class="mb-3">
        <label for="modalAvance" class="form-label">Avance:</label>
        <input type="text" class="form-control" id="modalAvance" name="Avance" value="{{  $facture->Avance  }}">
    </div>
    <div class="mb-3">
        <label for="modalReste" class="form-label">Reste:</label>
        <input type="text" class="form-control" id="modalReste" name="Reste" value="{{  $facture->Reste  }}">
    </div>
    <div class="mb-3">
        <label for="modalStatutPaiement" class="form-label">Statut de Paiement:</label>
        <input type="text" class="form-control" id="modalStatutPaiement" name="StatutPaiement" value="{{  $facture->StatutPaiement  }}">
    </div>
    <div class="mb-3">
        <label for="modalModePaiement" class="form-label">Mode de Paiement:</label>
        <input type="text" class="form-control" id="modalModePaiement" name="ModePaiement" value="{{  $facture->ModePaiement  }}">
    </div>
    <div class="mb-3">
        <label for="modalInfosPaiement" class="form-label">Infos de Paiement:</label>
        <input type="text" class="form-control" id="modalInfosPaiement" name="InfosPaiement" value="{{  $facture->InfosPaiement  }}">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">D'accord</button>
    </div>


</form>
            
<hr>
        </div>
@endsection
