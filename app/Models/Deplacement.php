<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mission;
class Deplacement extends Model
{
    use HasFactory;
    protected $table = "deplacements";
    protected $primaryKey = 'id';
    protected $fillable = [
        'exercice',
        'residence',
        'n_ordre',
        'matricule',
        'grade',
        'nom',
        'prenom',
        'service',
        'periode_debut',
        'periode_fin',
       
    ];
    // protected $dates = [
    //     'periode_debut',
    //     'periode_fin',
    //     'date_mission',
    // ];
    public function mission()
    {
        return $this->hasMany(Mission::class,'deplacement_id','id');

    }
   
    
}
