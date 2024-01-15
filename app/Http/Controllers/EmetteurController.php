<?php

// app/Http/Controllers/EmetteurController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emetteur;

class EmetteurController extends Controller
{
    public function index()
{
    $emetteur = $this->getEmetteur();
    $emetteurs = Emetteur::all();
    session()->put('emetteurs', $emetteurs);

    return view('emetteurs.index', compact('emetteur', 'emetteurs'));
}


    public function create()
    {
        return view('emetteurs.create');
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
    $emetteur = Emetteur::first();
    return $emetteur;
}
    public function store(Request $request)
    {
        $request->validate([
            'SocieteEmettrice' => 'required',
            'Nom' => 'required',
            'Adresse' => 'required',
            'Email' => 'required|email',
            'Telephone' => 'required',
            'SiteWeb' => 'required',
            'ICE' => 'required',
            'RC' => 'required',
            'LOGO' => 'required',
        ]);
        

        $emetteur = new Emetteur();
        $emetteur->SocieteEmettrice = $request->SocieteEmettrice;
        $emetteur->Nom = $request->Nom;
        $emetteur->Adresse = $request->Adresse;
        $emetteur->Email = $request->Email;
        $emetteur->Telephone = $request->Telephone;
        $emetteur->SiteWeb = $request->SiteWeb;
        $emetteur->ICE = $request->ICE;
        $emetteur->RC = $request->RC;
        $emetteur->LOGO = $request->LOGO;
        $emetteur->save();

        return redirect('/emetteurs')->with('success', 'Emetteur ajouté avec succès!');
    }
}
