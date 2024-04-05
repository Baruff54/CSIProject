<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voeu extends Model {
    protected $table = 'voeu';
    protected $primaryKey = 'idvoeu';
    public $timestamps = false;

    protected $fillable = [
        'idvoeu',
        'preference',
        'voeuselectionnee',
        'idetablissement',
        'idouvrage'
    ];
}
