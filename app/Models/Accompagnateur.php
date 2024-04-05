<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Accompagnateur extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'accompagnateur';
    protected $primaryKey = 'idcompte';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'idcompte'
    ];
}
