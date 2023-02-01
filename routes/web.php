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
/*  Route index de KelyKart */
Route::get('/', function () {
    return view('visiteurs.content');
});



/*  Groupe de routes pour la section des formations */
Route::group(['prefix'=>'formations'] , function(){
    Route::get('/', function(){
        return view('visiteurs.formation-page');
    });
    Route::get('intro', function(){
        return view('visiteurs.formation-presentation');
    });
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

Route::get('test/formations', function(){
    $formations = \App\Models\Formation::all();
    return $formations;
});

Route::get('test/users', function(){
    $users = \App\Models\User::all();
    return view('visiteurs.test',['users'=>$users]);
});








