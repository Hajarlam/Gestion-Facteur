<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
       public function index()
{
    $service = $this->getService();
    $services = Service::all();

    return view('services.index', compact('service', 'services'));
}


    public function create()
    {
        return view('services.create');
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
    
   public function getservice()
{
    $service = Service::first();
    return $service;
}
    public function store(Request $request)
    {
        $request->validate([
            'Nom' => 'required',
            'Description' => 'required',
            'Composants' => 'required',
            'PrixUnitaire_HT' => 'required',
            'Unite' => 'required|in:Pièce,Heure,Forfait',
            'DateCreation' => 'required',
            'PackId' => 'required',
           
        ]);
        

        $service = new Service();
        $service->Nom = $request->Nom;
        $service->Description = $request->Description;
        $service->Composants = $request->Composants;
        $service->PrixUnitaire_HT = $request->PrixUnitaire_HT;
        $service->Unite = $request->Unite;
        $service->DateCreation = $request->DateCreation;
        $service->PackId = $request->PackId;
        
        $service->save();

        return redirect('/services')->with('success', 'services ajouté avec succès!');
    }
}
