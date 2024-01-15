<?php

// app\Models\Quittance.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quittance extends Model
{
    protected $fillable = [
        'tenant_societe_id',
        'client_societe_id',
        'date_creation',
        'date_validation',
        'montant_total',
        'avance',
        'reste',
        'mode_paiement',
        'reference_quittance',
    ];

    // Define relationships with other models if needed
    public function tenantSociete()
    {
        return $this->belongsTo(TenantSociete::class, 'tenant_societe_id');
    }

    public function clientSociete()
    {
        return $this->belongsTo(ClientSociete::class, 'client_societe_id');
    }
}

