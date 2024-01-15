<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenantSociete extends Model
{
    // Define your model properties and methods here

    protected $fillable = [
        'nom_societe',
        'adresse_tenant_societe',
        'email_societe',
        'telephone_societe',
        'siteweb_societe',
        'ice_societe',
        'rc_societe',
        'logo_societe',
        'if_societe',
        'cnss_societe',
    ];
    public function show($id)
    {
        $tenantSociete = TenantSociete::findOrFail($id);
    
        return view('tenant_societes.show', compact('tenantSociete'));
    }
    // You can define relationships, custom methods, etc. here
}
