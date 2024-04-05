<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipationEditionReferent extends Model {
    protected $table = 'participationeditionreferent';
    protected $primaryKey = ['idreferent', 'idedition'];
    public $timestamps = false;

    protected $fillable = [
        'idreferent',
        'idedition',
        'participe',
    ];
}
