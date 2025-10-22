<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Deplacement;
class Mission extends Model
{
    use HasFactory;
    
        
    

    protected $fillable = [
        'date_mission',
        'destination',
        'heure_depart',
        'heure_retour',
        'repas',
        'montant',
        'deplacement_id',
    ];

    public function deplacement()
    {
        return $this->belongsTo(Deplacement::class);
    }
}
