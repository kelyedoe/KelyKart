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
    return view('visiteurs.content');
});

Route::get('formations', function(){
    return view('visiteurs.formation-page');
});
Route::get('formations/intro', function(){
    return view('visiteurs.formation-presentation');
});
Route::get('formations/tutoriel', function(){
    return view('visiteurs.tutoriel');
});

Route::get('podcasts', function(){
    return view('visiteurs.podcast-page');
});

Route::get('blog', function(){
    return view('visiteurs.blog-page');
});


