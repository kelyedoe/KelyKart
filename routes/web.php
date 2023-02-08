<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formationController;
use App\Http\Controllers\tutorielController;
use App\Http\Controllers\indexController;
use App\Models\Formation;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

/* Route::get('/', function () {
    return view('visiteurs.content');
}); */

/*  Route index de KelyKart */
Route::get('/', [indexController::class, 'getAll_formations']);

/*  Groupe de routes pour la section des formations vue des utilisateurs  */
Route::group(['prefix'=>'formations'] , function(){
    
    //Route pour afficher toutes les formations de la DB
    Route::get('/', [formationController::class, 'getAll_formations']);

    //Route pour accéder à l'introduction d'une formation
    Route::get('introduction/{id}',[formationController::class, 'get_formation']);

    Route::get('tuto', function(){
        return view('visiteurs.tutoriel');
    });  

    Route::get('liste', [formationController::class, 'getAll_backend']);
});



/** Groupe des routes gérés par l'administrateur de KelyKart */
Route::group(['prefix'=>'backend'], function(){

    //Routes pour ajouter une  nouvelle formation dans la DB
    Route::get('ajouter', [formationController::class, 'show_form']);
    Route::post('ajouter', [formationController::class, 'create_formation']);
    
    Route::get('/', [formationController::class, 'getAll_backend']);

    //Route pour supprimer une formation de la DB
    Route::get('supprimer/{id}', [formationController::class, 'delete']);

    //Routes pour modifier les details d'une formation
    Route::get('mettre-a-jour/{id}', [formationController::class, 'show_update_form']);
    Route::post('mettre-a-jour/{id}', [formationController::class, 'update_formation']);

    // Sous groupe de routets pour gerer les tutoriels dans la DB

      //AJouter un nouveau tutoriel sous une formation
      Route::get('ajouter-tutoriel',[tutorielController::class, 'show_form']);
      Route::post('ajouter-tutoriel',[tutorielController::class, 'create_tutoriel']);
      
        // Recupérer tous les tutoriels de DB et les afficher dans le tabeau
      Route::get('tutoriels',[tutorielController::class, 'getAll_tutoriels']); 

    //Modifier les details d'un tutoriel
    Route::get('update-tutoriel/{id}', [tutorielController::class , 'show_update_form']);
    Route::post('update-tutoriel/{id}', [tutorielController::class, 'update_tutoriel']);
});



/**** Mise en place des routes pour gérer les tutoriels VALIDE ----- */
Route::group(['prefix'=>'tutoriels'] , function(){
    //AFficher toutes les tutoriels sous la formation
    Route::get('/',[tutorielController::class, 'getAll_tutoriels']);

   /*  //AJouter un nouveau tutoriel sous une formation
    Route::get('ajouter',[tutorielController::class, 'show_form']);
    Route::post('ajouter',[tutorielController::class, 'create_tutoriel']);
 */
    //Afficher un tutoriel au complet
    Route::get('tuto/{id}', [tutorielController::class, 'get_tutoriel']);
});


/** Gestion des Podcats du sytème */
/*  Groupe de routes pour la section des podcasts */
Route::group(['prefix'=>'podcasts'], function(){
    Route::get('/', function(){
        return view('visiteurs.podcast-page');
    });

    route::get('pod', function(){
        return view('visiteurs.podcasts');
    });
});

/*  Groupe de routes pour la section de blog */
Route::group(['prefix'=>'blog'], function(){
    Route::get('/', function(){
        return view('visiteurs.blog-page');
    });
});


/* Route::get('add-formation', function(){
    return view('backend.add-formation');
}); */

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


