<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tutorielController extends Controller
{
    public function get_tutoriel($id){
        $tutoriel = \App\Models\Tutoriel::findOrFail($id);
        return view('visiteurs.tutoriel', ['tutoriel'=> $tutoriel]);
    }
    
    public function show_form(){
        $tutoriels = \App\Models\Tutoriel::all();
        return view('visiteurs.test-tutoriel', ['tutoriels'=> $tutoriels]);
    }

    public function create_tutoriel(Request $request){
        $tutoriel = new \App\Models\Tutoriel;
        $tutoriel->titre = $request->titre;
        $tutoriel->description = $request->description;
        $tutoriel->content = $request->content;
        $tutoriel->video_youtube = $request->video_youtube;
        $tutoriel->video_duree = $request->video_duree;
        $tutoriel->formation_id = $request->formation_id;
        $tutoriel->user_id = $request->user_id;
        $tutoriel->save();
        return "Tutoriel crée avec succès";

    }

    public function getAll_tutoriels(){
        $tutoriels = \App\Models\Tutoriel::all();
        return view('visiteurs.test-tutoriel', ['tutoriels'=> $tutoriels]); 
    }
}
