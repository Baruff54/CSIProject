<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipationEditionAuteur extends Model {
    protected $table = 'participationeditionauteur';
    protected $primaryKey = ['idauteur', 'idedition'];
    public $timestamps = false;

    protected $fillable = [
        'idauteur',
        'idedition',
        'participe',
    ];
}
