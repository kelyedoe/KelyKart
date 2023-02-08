<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Formation;

class formationController extends Controller
{
    public function getAll_formations(){
        $formations = \App\Models\Formation::all();
        return view('visiteurs.formation-page', ['formations'=>$formations]);
    }
    // Here goes all the conrollers for Formation class
    //show_form() function used to show the form
    public function show_form(){
        $formations = \App\Models\Formation::all();
        return view('backend.add-formation',['formations'=> $formations]);
    }
    // create function to insert new formation into the database
    public function create_formation(Request $request){
        $request->validate([
            'image_icon'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon_large'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $image_icon_nom= time().'.'.$request->image_icon->extension();
        $icon_large_nom= time().'.'.$request->image_icon->extension();
        
        $request->image_icon->move(public_path('images'), $image_icon_nom);
        $request->icon_large->move(public_path('images'), $icon_large_nom);
        
        $formation = new \App\Models\Formation;
        $formation->nom = $request->nom;
        $formation->description = $request->description;
        $formation->presentation = $request->presentation;
        $formation->image_icon = $image_icon_nom;
        $formation->video_link_presentation = $request->video_link_presentation;
        $formation->total_chapitres = $request->total_chapitres;
        $formation->total_duree = $request->total_duree;
        $formation->icon_large = $icon_large_nom;
       
        $formation->save();
        return "Formation crée avec succès";
        //return view('visiteurs.test', ['formation'=>$formation]);
    }
    //get function to return a specific formation from the table formations
    public function get_formation($id){
        $result = \App\Models\Formation::findOrFail($id);
        $tutoriels = Formation::find($id)->tutoriel()->get();
        return view('visiteurs.formation-presentation', ['result'=>$result, 'tutoriels'=>$tutoriels]);
    }
   /*  public function formation_tutoriel($id){
        $formationTutos = Formation::find($id)->tutoriel()->get();
        return view('visiteurs.')
    } */
    public function show_update_form($id){
        $result = \App\Models\Formation::findOrFail($id);
        return view('backend.update-formation', ['result'=>$result]);
    }
    public function update_formation( Request $request, $id){
        $formation = Formation::where('id', $id)
        ->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'presentation' => $request->presentation,
            'image_icon' => $request->image_icon,
            'video_link_presentation' => $request->video_link_presentation,
            'total_chapitres' => $request->total_chapitres,
            'total_duree' => $request->total_duree
        ]);  
        return "Mise à jour avec succès";     
    }

    public function delete($id){
        $result = \App\Models\Formation::findOrFail($id);
        if($result){
            $result->delete();
            return "Formation supprimée avec succès";
        }
    }
    public function total_formations(){}
}
