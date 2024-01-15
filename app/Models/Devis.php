<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    protected $fillable = ['tenant_societe_id','client_societe_id', 'date_creation','date_validation', 'status', 'commentaire', 'devise', 'reference_devis'];

}
