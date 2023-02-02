<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'description',
        'presentation',
        'image_icon',
        'video_link_presentation',
        'total_chapitres',
        'total_duree'
    ];
    /**
     * Retrouver la formation associée au tutoriel.
     */
    public function tutoriel()
    {
        return $this->hasMany(Tutoriel::class, 'formation_id');
    } 
}
