<form method="POST" action={{ route('categories.store') }} >
                        @csrf
                        <!-- Update the form fields based on your requirements -->
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
