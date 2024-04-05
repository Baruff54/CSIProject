<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuteurParticipeIntervention extends Model {
    protected $table = 'auteurparticipeintervention';
    protected $primaryKey = ['idauteur', 'idintervention'];
    public $timestamps = false;
    protected $fillable = [
        'idauteur',
        'idintervention'
    ];
}
