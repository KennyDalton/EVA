<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','tipo','lastname',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function curso_usuario()
    {
        return $this->hasMany('App\Curso_Usuario', 'id', 'id');
    }
    public function user_carrera()
    {
        return $this->hasMany('App\User_Carrera', 'id', 'id');
    }
}
