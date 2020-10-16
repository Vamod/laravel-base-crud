<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
   {
     // nomi delle colonne
    protected $fillable = [
        'titolo', 'regista', 'anno', 'trama',
    ];
}
