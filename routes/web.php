<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\QuittanceController;
use App\Http\Controllers\EmetteurController;
use App\Http\Controllers\TenantSocieteController;
use App\Http\Controllers\ServiceController;


/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/register/create', [AuthController::class, 'create'])->name('create');

Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/ajouter_produit', [CategoryController::class, 'ajouterProduit'])->name('add_product');
Route::post('/ajouter_produit', [CategoryController::class, 'sauvegarderProduit'])->name('save_product');
Route::get('/ajouter_produit',  [CategoryController::class, 'showProducts']);
Route::get('/ajouter_produit/{id}',  [CategoryController::class, 'UpdateProducts']);
Route::post('/ajouter_produit', [CategoryController::class, 'sauvegarderUpdate'])->name('save_Update');
Route::get('/ajouter_produit/{id}',  [CategoryController::class, 'DeleteProducts']);
Route::resource('categories', CategoryController::class);
Route::resource('factures', FactureController::class);
Route::get('/factures/done', [FactureController::class, 'done'])->name('factures.done');
Route::resource('devis', DevisController::class)->names([
    'store' => 'devis.store',
]);
Route::get('/factures/{FactureId}', 'FactureController@show');
//Route::get('/quittance', [QuittanceController::class, 'quittance'])->name('quittance');
Route::resource('quittances', QuittanceController::class);
Route::get('/emetteurs', [EmetteurController::class, 'index'])->name('emetteurs');
Route::post('/emetteurs/store', [EmetteurController::class, 'store'])->name('emetteurs.store');
Route::get('/generate-pdf', [EmetteurController::class, 'generatePdf'])->name('generate.pdf');
Route::post('/devis', [DevisController::class, 'store'])->name('devis.store');
Route::resource('ajouter_service', ServiceController::class);
Route::get('/servaices', [ServiceController::class, 'store'])->name('services.store');
Route::resource('services', ServiceController::class);

Route::resource('tenant_societes', TenantSocieteController::class);
Route::resource('devi', DevisController::class);
Route::resource('articles', ArticleController::class);


Route::prefix('admin')->middleware('web')->group(function () {
    Route::get('/ajouter_produit', function () {
        return view('product.ajouter_produit');
    })->name('add_product');

    Route::get('/ajouter_service', function () {
        return view('product.ajouter_service');
    })->name('add_service');

    Route::get('/ajouter_article', function () {
        return view('article.ajouter_article');
    })->name('add_article');

    Route::get('/company', function () {
        return view('Company.company');
    })->name('company');

    Route::get('/paiement', function () {
        return view('paiement.paiement');
    })->name('paiement');

    Route::get('/devis', function () {
        return view('document.devis');
    })->name('devis');
    Route::get('/quittance', function () {
        return view('document.quittance');
    })->name('quittance');
    Route::get('/quittance', function () {
        return view('document.quittance');
    })->name('quittance');
    Route::get('/done', function () {
        return view('factures.done');
    })->name('done');
    Route::get('/livraison', function () {
        return view('document.livraison');
    })->name('livraison');
    Route::get('/commande', function () {
        return view('document.commande');
    })->name('commande');

    Route::get('/factures', function () {
        return view('factures.fact');
    })->name('factures.fact');
    
    
    Route::get('/stock', function () {
        return view('stock.stock');
    })->name('stock');

    Route::get('/settings', function () {
        return view('settings.settings');
    })->name('settings');

    

}); 
Route::get('/article', [ArticleController::class, 'index'])->name('article.index');

//Route::get('/article', [ArticleController::class, 'article'])->name('article');

Auth::routes();


