<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ouvrage extends Model {
    protected $table = 'ouvrage';
    protected $primaryKey = 'idouvrage';
    public $timestamps = false;

    protected $fillable = [
        'idouvrage',
        'titre',
        'typepublic',
        'classe',
        'codelangue'
    ];


}
