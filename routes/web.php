<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formationController;
use App\Http\Controllers\indexController;

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

/* Route::get('/', function () {
    return view('visiteurs.content');
}); */

/*  Route index de KelyKart */
Route::get('/', [indexController::class, 'getAll_formations']);

/*  Groupe de routes pour la section des formations */
Route::group(['prefix'=>'formations'] , function(){
    
    //Route pour afficher toutes les formations de la DB
    Route::get('/', [formationController::class, 'getAll_formations']);

    //Routes pour ajouter une  nouvelle formation dans la DB
    Route::get('ajouter', [formationController::class, 'show_form']);
    Route::post('ajouter', [formationController::class, 'create_formation']);

    //Routes pour modifier les details d'une formation
    Route::get('mettre-a-jour/{id}', [formationController::class, 'show_update_form']);
    Route::post('mettre-a-jour/{id}', [formationController::class, 'update_formation']);
    
    //Route pour supprimer une formation de la DB
    Route::get('supprimer/{id}', [formationController::class, 'delete']);

    //Route pour accéder à l'introduction d'une formation
    Route::get('introduction/{id}',[formationController::class, 'get_formation']);

    Route::get('tutoriel', function(){
        return view('visiteurs.tutoriel');
    });
});



/*  Groupe de routes pour la section des podcasts */
Route::group(['prefix'=>'podcasts'], function(){
    Route::get('/', function(){
        return view('visiteurs.podcast-page');
    });
});

/*  Groupe de routes pour la section de blog */
Route::group(['prefix'=>'blog'], function(){
    Route::get('/', function(){
        return view('visiteurs.blog-page');
    });
});

Route::get('test/{id}', [formationController::class, 'get']);
Route::get('test/users', function(){
    $users = \App\Models\User::all();
    return view('visiteurs.test',['users'=>$users]);
});









Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
