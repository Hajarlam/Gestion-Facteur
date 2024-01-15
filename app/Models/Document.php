<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['FactureId', 'ProduitId', 'ServiceId', 'Quantite', 'Unite', 'PrixUnitaire', 'Remise'];
}
