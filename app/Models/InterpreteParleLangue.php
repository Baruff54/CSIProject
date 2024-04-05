<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InterpreteParleLangue extends Model {
    protected $table = 'interpreteparlelangue';
    protected $primaryKey = ['idinterprete', 'codelangue'];
    public $timestamps = false;

    protected $fillable = [
        'idinterprete',
        'codelangue'
    ];
}
