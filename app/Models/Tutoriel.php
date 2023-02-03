<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutoriel extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'content',
        'video_youtube',
        'video_duree',
        'formation_id',
        'user_id' 
    ];


    /**
     * Retrouver la formation associée au tutoriel.
     */
     public function formation()
    {
        return $this->hasOne(Formation::class, 'tutoriel_id');
    } 

     /**
     * Retrouver l'admin associée au tutoriel.
     * Retrouver le créateur de la formation
     */
    public function user()
    {
        return $this->hasOne(User::class, 'tutoriel_id');
    } 
}
