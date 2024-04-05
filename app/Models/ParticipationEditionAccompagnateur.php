<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipationEditionAccompagnateur extends Model {
    protected $table = 'participationeditionaccompagnateur';
    protected $primaryKey = ['idaccomp', 'idedition'];
    public $timestamps = false;

    protected $fillable = [
        'idaccomp',
        'idedition',
        'participe',
    ];
}
