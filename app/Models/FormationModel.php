<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SessionModel;

class FormationModel extends Model
{
     protected $fillable = [
        'codeForm',
        'codeSess',
        'titreForm',
        'dureeForm',
        'prixForm',
    ];


    public function session(): BelongsTo
    {
        return $this->belongsTo(SessionModel::class);
    }
}
