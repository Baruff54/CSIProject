<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Langue extends Model {
    protected $table = 'langue';
    protected $primaryKey = 'codelangue';
    public $timestamps = false;
    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';

    protected $fillable = [
        'codelangue',
        'nom'
    ];
}
