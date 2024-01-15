<?php

// ArticleController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // Mettez ici la logique de votre page d'articles
        return view('articles.index'); // Assurez-vous d'avoir la vue articles.index créée
    }
}
