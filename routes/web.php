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

Route::get('blog.html', function () {
    return view('site.blog');
});

Route::get('blog-single.html', function () {
    return view('site.blog-single');
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
