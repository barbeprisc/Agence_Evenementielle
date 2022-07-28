<?php

use Illuminate\Support\Facades\Route;

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
    return view('site.index');
});

Route::get('about.html', function () {
    return view('site.qui_sommes_nous');
});

Route::get('team.html', function () {
    return view('site.notre_equipe');
});

Route::get('services.html', function () {
    return view('site.services');
});

Route::get('pricing.html', function () {
    return view('site.nos_references');
});


Route::get('contact.html', function () {
    return view('site.contact');
});

Route::get('form', function () {
    return view('admin.form');
});

Route::get('list', function () {
    return view('admin.list');
});

Route::get('galerie', function () {
    return view('site.galerie');
});

Route::get('/', function () {
    return view('layouts.main');
});

Route::resource('gestion_event', EvenementContoller::class);
Route::get('supprimer_evenement/{id}', [EvenementContoller::class, 'destroy']);

Route::resource('gestion_cat', CategorieController::class);
Route::get('supprimer_categorie/{id}', [CategorieController::class, 'destroy']);

Route::resource('gestion_com', CommentaireController::class);
Route::get('supprimer_commentaire/{id}', [CommentaireController::class, 'destroy']);


