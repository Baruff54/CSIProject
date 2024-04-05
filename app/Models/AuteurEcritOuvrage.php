<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuteurEcritOuvrage extends Model {
    protected $table = 'auteurecritouvrage';
    protected $primaryKey = ['idauteur', 'idouvrage'];
    public $timestamps = false;

    protected $fillable = [
        'idauteur',
        'idouvrage'
    ];
}
