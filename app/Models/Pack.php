<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    protected $fillable = ['Nom', 'Description', 'DateCreation', 'Unite'];
}
