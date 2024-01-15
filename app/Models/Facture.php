<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PDF;

class Facture extends Model
{
    protected $fillable = [
        'FactureId', 'DevisId', 'TenantSociétId', 'ClientSociéteId', 'DateCreation', 'DateEcheance', 'Montant_HT', 'Montant_Total', 'Avance', 'Reste', 'StatutPaiement', 'ModePaiement', 'InfosPaiement', 'Devise', 'RéferenceFacture'
    ];
    
    // ...
}

