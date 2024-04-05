<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoeuAppartientCampagneVoeu extends Model {
    protected $table = 'voeuappartientcampagnevoeu';
    protected $primaryKey = ['idcampagne', 'idvoeu'];
    public $timestamps = false;

    protected $fillable = [
        'idcampagne',
        'idvoeu',
    ];
}
