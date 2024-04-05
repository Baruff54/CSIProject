<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GestionEdition extends Model {
    protected $table = 'gestionedition';
    protected $primaryKey = ['idgestionnaire', 'idedition'];
    public $timestamps = false;

    protected $fillable = [
        'idgestionnaire',
        'idedition'
    ];
}
