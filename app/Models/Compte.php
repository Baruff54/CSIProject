<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Compte extends Authenticatable {
    use HasFactory, Notifiable;
    protected $table = 'compte';
    public $primaryKey = 'idcompte';
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'adresse',
        'pays',
        'tel'
    ];

    public function accompagnateur() {
        return $this->hasOne(Accompagnateur::class, 'idcompte');
    }

    public function auteur() {
        return $this->hasOne(Auteur::class, 'idcompte');
    }

    public function gestionnaire() {
        return $this->hasOne(Gestionnaire::class, 'idcompte');
    }

    public function interprete() {
        return $this->hasOne(Accompagnateur::class, 'idcompte');
    }

    public function referent() {
        return $this->hasOne(Referent::class, 'idcompte');
    }
}
