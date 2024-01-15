<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['Nom', 'Description', 'PrixUnitaire_HT', 'Quantite', 'DateCreation', 'Photo', 'Categorie'];
}
