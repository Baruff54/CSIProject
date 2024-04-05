<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuteurParleLangue extends Model {
    protected $table = 'auteurparlelangue';
    protected $primaryKey = ['idauteurouvrage', 'codelangue'];
    public $timestamps = false;

    protected $fillable = [
        'idauteurouvrage',
        'codelangue'
    ];
}
