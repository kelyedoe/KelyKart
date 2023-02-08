<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'introduction',
        'nom_invite',
        'description_invite',
        'lieu_realisation',
        'realisateur',
        'image_icon',
        'duree_video',
        'lien_video',
        'user_id' 
    ];

    /**
     * Retrouver l'admin associée au tutoriel.
     * Retrouver le créateur de la formation
     */
    public function user()
    {
        return $this->hasOne(User::class, 'podcast_id');
    } 
}
