<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['Nom', 'Prenom', 'Email', 'Phone', 'Adresse', 'Ville', 'Pays', 'SocieteId'];
}
