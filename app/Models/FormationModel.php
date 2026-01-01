<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SessionModel;

class FormationModel extends Model
{

    protected $primaryKey = 'codeForm';
    public $incrementing = false;
    protected $fillable = [
        'codeForm',
        'codeSess',
        'titreForm',
        'dureeForm',
        'prixForm',
    ];


    public function etudiants (){
        return $this->hasMany(EtudiantModel::class,'codeForm','codeForm');
    }

    public function specialites(){
        return $this->hasMany(SpecialiteModel::class , 'codeForm','codeForm');
    }

    public function session(){
        return $this->belongsTo(SessionModel::class , 'codeSess' , 'codeSess');
    }
}
