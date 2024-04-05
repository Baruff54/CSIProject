<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampagneVoeu extends Model {
    protected $table = 'campagnevoeu';
    protected $primaryKey = 'idcampagne';
    public $timestamps = false;

    protected $fillable = [
        'idcampagne',
        'datedebut',
        'datefin',
        'annee',
        'idedition',
        'status'
    ];
}
