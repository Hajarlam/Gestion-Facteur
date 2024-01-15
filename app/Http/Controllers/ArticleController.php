<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {    
        $article = $this->getArticle();
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }
    public function getArticle()
    {
        $article = Article::first();
        return $article;
    }
    public function store(Request $request)
    {
        $request->validate([
            'Nom' => 'required',
            'Description' => 'required',
            'PrixUnitaire_HT' => 'required',
            'Quantite' => 'required',
            'DateCreation' => 'required',
            'Photo' => 'required',
            'Categorie' => 'required',
        ]);

        Article::create($request->all());

        return redirect('/articles')->with('success', 'Article ajouté avec succès!');
    }

    // Ajoutez d'autres méthodes pour gérer la mise à jour et la suppression des articles.
}
