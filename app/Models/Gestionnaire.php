<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Gestionnaire extends Authenticatable {
    protected $table = 'gestionnaire';
    protected $primaryKey = 'idcompte';
    public $timestamps = false;

    protected $fillable = [
        'idcompte'
    ];
}
