<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emetteur extends Model
{

    protected $fillable = [
        'SocieteEmettrice',
        'Nom',
        'Adresse',
        'Email',
        'Telephone',
        'SiteWeb',
        'ICE',
        'RC',
        'LOGO',
    ];
}
