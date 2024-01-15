<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quittance;

class QuittanceController extends Controller
{
    public function index()
    {
        $quittances = Quittance::all();
        return view('quittances.index', compact('quittances'));
    }

    public function create()
    {
        return view('quittances.create');
    }

    public function store(Request $request)
    {
        // Validez les données du formulaire ici

        Quittance::create($request->all());

        return redirect()->route('quittances.index')->with('success', 'Quittance créée avec succès');
    }

    public function show($id)
    {
        $quittance = Quittance::findOrFail($id);
        return view('quittances.show', compact('quittance'));
    }

    public function edit($id)
    {
        $quittance = Quittance::findOrFail($id);
        return view('quittances.edit', compact('quittance'));
    }

    public function update(Request $request, $id)
    {
        // Validez les données du formulaire ici

        $quittance = Quittance::findOrFail($id);
        $quittance->update($request->all());

        return redirect()->route('quittances.index')->with('success', 'Quittance mise à jour avec succès');
    }

    public function destroy($id)
    {
        $quittance = Quittance::findOrFail($id);
        $quittance->delete();

        return redirect()->route('quittances.index')->with('success', 'Quittance supprimée avec succès');
    }
}
