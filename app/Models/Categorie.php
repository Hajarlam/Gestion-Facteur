<?php

// Categorie.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'Nom',
        'Description', 
        'Marque', 
        'Model', 
        'Specification'
    ];
    public $timestamps = false;

}
