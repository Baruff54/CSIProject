<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Referent extends Authenticatable {
    protected $table = 'referent';
    protected $primaryKey = 'idcompte';
    public $timestamps = false;

    protected $fillable = [
        'idcompte'
    ];
}
