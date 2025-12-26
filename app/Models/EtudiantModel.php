<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EtudiantModel;
class EtudiantModel extends Model
{
    protected $fillable = [
        'NumCINETU',
        'codeForm',
        'nomEtu',
        'prenomEtu',
        'adresseEtu',
        'villeEtu',
        'niveauEtu'
    ];


    public function formation(): BelongsTo
    {
        return $this->belongsTo(FormationModel::class);
    }
}
