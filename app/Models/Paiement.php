<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable = ['FactureId', 'DatePaiement', 'Avance', 'Reste', 'StatutPaiement', 'ModePaiement', 'InfosPaiement'];
}
