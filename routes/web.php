<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementContoller;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentaireController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about.html', function () {
    return view('Pages.qui_sommes_nous');
});

Route::get('team.html', function () {
    return view('Pages.notre_equipe');
});

Route::get('services.html', function () {
    return view('Pages.evenements');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


// Route::get('/', function () {
//     return view('layouts.main');
// });

Route::resource('gestion_event', EvenementContoller::class);
Route::get('supprimer_evenement/{id}', [EvenementContoller::class, 'destroy']);

Route::resource('gestion_cat', CategorieController::class);
Route::get('supprimer_categorie/{id}', [CategorieController::class, 'destroy']);

Route::resource('gestion_com', CommentaireController::class);
Route::get('supprimer_commentaire/{id}', [CommentaireController::class, 'destroy']);
