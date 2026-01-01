<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EtudiantModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EtudiantModel extends Model
{
    protected $primaryKey = 'NumCINETU';
    public $incrementing = false;
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
        return $this->belongsTo(FormationModel::class,'codeForm','codeForm');
    }
}
