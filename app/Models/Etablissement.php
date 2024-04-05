<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model {
    protected $table = 'etablissement';
    public $timestamps = false;
    protected $primaryKey = 'idetablissement';

    protected $fillable = [
        'idetablissement',
        'nom',
        'typeetablissement',
        'ville',
        'adresse',
        'nombrevoeux'
    ];
}
