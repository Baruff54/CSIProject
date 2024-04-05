<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model {
    protected $table = 'intervention';
    protected $primaryKey = 'idintervention';
    public $timestamps = false;

    protected $fillable = [
        'idintervention',
        'date',
        'heuredebut',
        'heurefin',
        'status',
        'idetablissement',
        'idaccomp',
        'idinterprete'
    ];
}
