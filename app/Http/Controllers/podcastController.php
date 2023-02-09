<?php

namespace App\Http\Controllers;
use App\Models\Podcast;

use Illuminate\Http\Request;

class podcastController extends Controller
{
    public function get_podcast($id){
        $podcast = Podcast::findOrFail($id);
        return view('visiteurs.podcasts', ['podcast'=>$podcast]);
    }

    public function show_form(){
        return view('backend.add-podcast');
    }

    public function create_podcast(Request $request){
        $request->validate([
            'image_icon'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $image_icon_nom= time().'.'.$request->image_icon->extension();
        
        $request->image_icon->move(public_path('images'), $image_icon_nom);
        
        $podcast = new \App\Models\Podcast;
        $podcast->titre = $request->titre;
        $podcast->introduction = $request->introduction;
        $podcast->nom_invite = $request->nom_invite;
        $podcast->description_invite = $request->description_invite;
        $podcast->lieu_realisation = $request->lieu_realisation;
        $podcast->realisateur = $request->realisateur;
        $podcast->image_icon = $image_icon_nom;
        $podcast->duree_video = $request->duree_video;
        $podcast->lien_video = $request->lien_video;
        $podcast->user_id = $request->user_id;
        $podcast->save();
        //return "Podcast crée avec succès";
        return redirect('backend.podcasts');
        
    }

    public function getAll(){
        $podcasts = \App\Models\Podcast::all();
        return view('visiteurs.podcast-page',['podcasts'=>$podcasts]);
    }

    public function getAll_podcasts(){
        $podcasts = \App\Models\Podcast::all();
        return view('backend.podcasts', ['podcasts'=> $podcasts]); 
    }
}
