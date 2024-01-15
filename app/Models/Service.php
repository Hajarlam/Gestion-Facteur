<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['Nom', 'Description', 'Composants', 'PrixUnitaire_HT', 'Unite', 'DateCreation', 'PackId'];
}
