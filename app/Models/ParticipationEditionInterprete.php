<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipationEditionInterprete extends Model {
    protected $table = 'participationeditioninterprete';
    protected $primaryKey = ['idinterprete', 'idedition'];
    public $timestamps = false;

    protected $fillable = [
        'idinterprete',
        'idedition',
        'participe',
    ];
}
