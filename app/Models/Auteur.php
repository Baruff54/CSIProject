<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Auteur extends Authenticatable {
    protected $table = 'auteur';
    protected $primaryKey = 'idcompte';
    public $timestamps = false;

    protected $fillable = [
        'idcompte'
    ];
}
