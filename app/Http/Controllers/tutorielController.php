<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutoriel;
use App\Models\Formation;

class tutorielController extends Controller
{
    public function get_tutoriel($id){
        $tutoriel = \App\Models\Tutoriel::findOrFail($id);
        //$formation = Tutoriel::find($id)->formation()->get();
        $formationId = $tutoriel->formation_id;
        $formation = Formation::findOrFail($formationId);
        $tutoriels = Formation::find($formationId)->tutoriel()->get();
        return view('visiteurs.tutoriel', ['tutoriel'=> $tutoriel, 'formation'=>$formation, 'tutoriels'=>$tutoriels]);
    }

    public function formation_tutoriel($id){
        $formationTutos = Formation::find($id)->tutoriel()->get();
        return view('visiteurs.tutoriel');
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
