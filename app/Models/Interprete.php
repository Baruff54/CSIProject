<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Interprete extends Authenticatable {
    protected $table = 'interprete';
    protected $primaryKey = 'idcompte';
    public $timestamps = false;

    protected $fillable = [
        'idcompte'
    ];
}
