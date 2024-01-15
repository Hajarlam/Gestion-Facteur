<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    protected $fillable = ['Nom', 'Phone', 'Adresse', 'Email', 'IceNumber', 'RibNumber', 'DateInscription', 'Statut'];
}
