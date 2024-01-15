<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategoryController extends Controller
{
    public function ajouterProduit()
    {
        $category = new Categorie();
        $categories = Categorie::all();
        return view('product.ajouter_produit', compact('category','categories'));
    }

}
