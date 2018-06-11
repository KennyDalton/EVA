<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Carrera extends Model
{
    protected $table = 'user_carrera';
    protected $fillable = ['id','idCarrera'];
    //ya no guarda el created_at, updated_at 
    public $timestamps = false;

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'id');
    }
    public function carrera()
    {
        return $this->hasOne(Carrera::class, 'idCarrera', 'idCarrera');
    }
}
