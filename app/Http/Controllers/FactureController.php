<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;
use Illuminate\Support\Facades\Auth;

use Barryvdh\DomPDF\PDF;

class FactureController extends Controller
{
    public function index()
    {
        $factures = Facture::all();
        return view('factures.index', compact('factures'));
    }

  //  public function show()
//{
    
//$factures = Facture::all(); // récupérer les données nécessaires
  //  $data = ['title' => 'Facture PDF', 'content' => 'Contenu de la facture ici...', 'factures' => $factures];
    //$pdf = PDF::loadView('factures.index', $data);
    //return $pdf->stream();
   // return redirect()->route('factures.index')->with('status', 'La facture a été télécharger avec succès.');

//}


public function show(Request $request)
{
    $factures = Facture::all();
    
    $emetteurController = new EmetteurController(); // Instancier le contrôleur EmetteurController
    $emetteur = $emetteurController->getEmetteur(); 
    
    $devisController = new DevisController();
    $devis = $devisController->getDevis(); // Modifier cette ligne si nécessaire
 
    $articleController = new ArticleController();
    $article = $articleController->getArticle();

    $serviceController = new ServiceController();
    $service = $serviceController->getService();


    $user = Auth::user();
    $data = [
        'factures' => $factures,
        'user' => $user,
        'devis' => $devis,
        'emetteur' => $emetteur, 
        'article' => $article, 
        'service' => $service, 

    ];
    // Use the make method to create an instance of PDF
    $pdf = app('dompdf.wrapper')->loadView('pdf', $data);

    // Use download method to force download of the PDF
    return $pdf->download('invoices.pdf');
}


    public function create()
    {
       //
    }

    public function store(Request $request)
    {
        $request->validate([
            'FactureId' => 'required',
            'DevisId' => 'required',
            'tenant_societe_id' => 'required',
            'ClientSociéteId' => 'required',
            'DateCreation' => 'required',
            'DateEcheance' => 'required',
            'Montant_HT' => 'required',
            'Montant_Total' => 'required',
            'Avance' => 'required',
            'Reste' => 'required',
            'StatutPaiement' => 'required',
            'ModePaiement' => 'required',
            'InfosPaiement' => 'required',
            'Devise' => 'required',
            'RéferenceFacture' => 'required',
        ]);
    
        $facture = new Facture();
        $facture->FactureId = $request->FactureId;
        $facture->DevisId = $request->DevisId;
        $facture->tenant_societe_id = $request->tenant_societe_id;
        $facture->ClientSociéteId = $request->ClientSociéteId;
        $facture->DateCreation = $request->DateCreation;
        $facture->DateEcheance = $request->DateEcheance;
        $facture->Montant_HT = $request->Montant_HT;
        $facture->Montant_Total = $request->Montant_Total;
        $facture->Avance = $request->Avance;
        $facture->Reste = $request->Reste;
        $facture->StatutPaiement = $request->StatutPaiement;
        $facture->ModePaiement = $request->ModePaiement;
        $facture->InfosPaiement = $request->InfosPaiement;
        $facture->Devise = $request->Devise;
        $facture->RéferenceFacture = $request->RéferenceFacture;
        $facture->save();
    
        return to_route('factures.index')->with('status', 'La facture a été ajoutée avec succès.');
    }
    

    public function edit(Facture $facture)
    {
        return view('factures.edit', compact('facture'));
    }

    public function update(Request $request, Facture $facture)
    {
        $request->validate([
            'FactureId' => 'required',
            'DevisId' => 'required',
            'tenant_societe_id' => 'required',
            'ClientSociéteId' => 'required',
            'DateCreation' => 'required',
            'DateEcheance' => 'required',
            'Montant_HT' => 'required',
            'Montant_Total' => 'required',
            'Avance' => 'required',
            'Reste' => 'required',
            'StatutPaiement' => 'required',
            'ModePaiement' => 'required',
            'InfosPaiement' => 'required',
            'Devise' => 'required',
            'RéferenceFacture' => 'required',
        ]);
    
        // Update the existing Facture record
        $facture->FactureId = $request->FactureId;
        $facture->DevisId = $request->DevisId;
        $facture->tenant_societe_id = $request->tenant_societe_id;
        $facture->ClientSociéteId = $request->ClientSociéteId;
        $facture->DateCreation = $request->DateCreation;
        $facture->DateEcheance = $request->DateEcheance;
        $facture->Montant_HT = $request->Montant_HT;
        $facture->Montant_Total = $request->Montant_Total;
        $facture->Avance = $request->Avance;
        $facture->Reste = $request->Reste;
        $facture->StatutPaiement = $request->StatutPaiement;
        $facture->ModePaiement = $request->ModePaiement;
        $facture->InfosPaiement = $request->InfosPaiement;
        $facture->Devise = $request->Devise;
        $facture->RéferenceFacture = $request->RéferenceFacture;
    
        $facture->save(); // Use save() to update the record
    
        return redirect()->route('factures.index')->with('status', 'La facture a été modifiée avec succès.');
    }
    


    public function destroy(Facture $facture)
    {
        // Suppression de la facture
        $facture->delete();

        return redirect()->route('factures.index')->with('status', 'La facture a été supprimée avec succès.');
    }
}
