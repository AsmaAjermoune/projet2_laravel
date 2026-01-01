<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialiteModel extends Model{ 

    protected $primaryKey = 'codeSpec';
    public $incrementing = false;
    protected $fillable = ['codeSpec','nomSpec','codeForm','descSpec'];

 
    public function formation(){
        return $this->belongsTo(Formation::class, 'codeForm', 'codeForm');
    }
}