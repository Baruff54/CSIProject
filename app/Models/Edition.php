<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model {
    protected $table = 'edition';
    protected $primaryKey = 'idedition';
    public $timestamps = false;

    protected $fillable = [
        'idedition',
        'annee',
        'nom',
        'nbparticipant',
        'nbintervention'
    ];
}
