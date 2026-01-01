<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionModel extends Model
{

    protected $primaryKey = 'codeSess';
    public $incrementing = false;
    protected $fillable = ['codeSess','nomSess','dateDebutSess','dateFinSess'];

    public function formations(){
        return $this->hasMany(FormationModel::class , 'codeSess' , 'codeSess');
    }
}