<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tache extends Model
{
    use HasFactory;


    protected $fillable = [
        'date_decheance',
        'categorie',
        'Tache',
        'note',
    ];
   
    
}
