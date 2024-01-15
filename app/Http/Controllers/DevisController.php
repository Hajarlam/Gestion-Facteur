<?php

// app/Http/Controllers/EmetteurController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devis;

class DevisController extends Controller
{
    public function index()
    {
        $devi = $this->getDevis();

        $devisList = Devis::all(); // Change variable name to $devisList or another name
        return view('devi.index', compact('devisList'));
    }
    

    public function create()
    {
        return view('devis.create');
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
    
   public function getDevis()
{
    $devi = Devis::first();
    return $devi;
}
    public function store(Request $request)
    {
        $request->validate([
            'tenant_societe_id' => 'required',
            'client_societe_id' => 'required',
            'date_creation' => 'required',
            'date_validation' => 'required',
            'status' => 'required|in:En cours,Accepté,Refusé',
            'commentaire' => 'required',
            'devise' => 'required',
            'reference_devis' => 'required',
        ]);
        

        $devi = new Devis();
        $devi->tenant_societe_id = $request->tenant_societe_id;
        $devi->client_societe_id = $request->client_societe_id;
        $devi->date_creation = $request->date_creation;
        $devi->date_validation = $request->date_validation;
        $devi->status = $request->status;
        $devi->commentaire = $request->commentaire;
        $devi->devise = $request->devise;
        $devi->reference_devis = $request->reference_devis;
        $devi->save();

        return redirect()->route('devi.index')->with('success', 'Devis Societes ajouté avec succès!');
    }
}
