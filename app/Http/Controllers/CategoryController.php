<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nom' => 'required',
            'Description' => 'required',
            'Marque' => 'required',
            'Model' => 'required',
            'Specification' => 'required',
        ]);

        $category = new Categorie();
        $category->Nom = $request->Nom;
        $category->Description = $request->Description;
        $category->Marque = $request->Marque;
        $category->Model = $request->Model;
        $category->Specification = $request->Specification;
        $category->save();

        return to_route('categories.index')->with('status', 'La catégorie a été ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $category)
{       
    $request->validate([
        'Nom' => 'required',
        'Description' => 'required',
        'Marque' => 'required',
        'Model' => 'required',
        'Specification' => 'required',
    ]);

    $category->Nom = $request->Nom;
    $category->Description = $request->Description;
    $category->Marque = $request->Marque;
    $category->Model = $request->Model;
    $category->Specification = $request->Specification;
    $category->update();

    return redirect()->route('categories.index')->with('status', 'Le produit a été modifié avec succès.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Categorie::find($id);
        $category->delete();

        return to_route('categories.index')->with('status', 'Le produit a été supprimé avec succès.');
    
    }
}
