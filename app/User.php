<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /* Relação one to many
    ** Um usuário possui vários eventos
    */
    public function events(){
        return $this->hasMany('App\Event');
    }

    /* Um usuário possui/participa de vários eventos */
    public function eventsAsParticipant(){
        return $this->belongsToMany('App\Event');
    }
}
