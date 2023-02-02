<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function getAll_formations(){
        $formations = \App\Models\Formation::all();
        return view('visiteurs.content', ['formations'=>$formations]);
    }
}
