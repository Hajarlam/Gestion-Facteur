<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentDevis extends Model
{
    protected $fillable = ['DevisId', 'ProduitId', 'ServiceId', 'Quantite', 'PrixUnitaire', 'Remise'];
}
