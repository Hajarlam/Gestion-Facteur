<?php

// app/Http/Controllers/EmetteurController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TenantSociete;

class TenantSocieteController extends Controller
{
    public function index()
{
    $tenantSocietes = TenantSociete::all();
    return view('tenant_societes.index', compact('tenantSocietes'));
}


    public function create()
    {
        return view('tenant_societes.create');
    }
    
   // public function votreAction()
    //{
        // Récupérer les informations de l'émetteur depuis la base de données
      //  $emetteur = Emetteur::first();

        // Vérifier si l'émetteur a été trouvé
        //if ($emetteur) {
            // Passer les informations de l'émetteur à la vue
           // return view('pdf', compact('emetteur')); // Utilisez compact pour passer la variable à la vue
       // } else {
            // Gérer le cas où l'émetteur n'est pas trouvé
            //return redirect()->route('login')->with('error', 'Emetteur not found.');
        //}
   // }
    
   public function getEmetteur()
   {
       return TenantSociete::first(); // Modifiez cela en fonction de votre logique pour récupérer l'émetteur approprié
   }

    public function store(Request $request)
    {
        $request->validate([
            'nom_societe' => 'required',
            'adresse_tenant_societe' => 'required',
            'email_societe' => 'required',
            'telephone_societe' => 'required',
            'siteweb_societe' => 'required',
            'ice_societe' => 'required',
            'rc_societe' => 'required',
            'logo_societe' => 'required',
            'if_societe' => 'required',
            'cnss_societe' => 'required',
        ]);
        

        $tenantSociete = new TenantSociete();
        $tenantSociete->nom_societe = $request->nom_societe;
        $tenantSociete->adresse_tenant_societe = $request->adresse_tenant_societe;
        $tenantSociete->email_societe = $request->email_societe;
        $tenantSociete->telephone_societe = $request->telephone_societe;
        $tenantSociete->siteweb_societe = $request->siteweb_societe;
        $tenantSociete->ice_societe = $request->ice_societe;
        $tenantSociete->rc_societe = $request->rc_societe;
        $tenantSociete->logo_societe = $request->logo_societe;
        $tenantSociete->if_societe = $request->if_societe;
        $tenantSociete->cnss_societe = $request->cnss_societe;
        $tenantSociete->save();

        return redirect()->route('tenant_societes.index')->with('success', 'Tenant Societes ajouté avec succès!');
    }
}
