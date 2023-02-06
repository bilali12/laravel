<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = ['prenom', 'nom', 'note', 'examen'];
    public static $rules = array(
        'nom' => 'required|min:3',
        'prenom' => 'required|min:3',
        'note' => 'required|min:1',
        'examen' => 'required|min:1'
    );

    public function matiere(){
        return $this->hasOne(Matiere::class);
    }
    public function semestre(){
        return $this->hasOne(Semestre::class);
    }
}
