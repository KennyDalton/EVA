<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carrera';
    protected $primaryKey = 'idCarrera';
    protected $fillable = ['nombreCarrera'];
    //ya no guarda el created_at, updated_at 
    public $timestamps = false;

    public function user_carrera()
    {
        return $this->hasMany('App\User_Carrera', 'idCarrera', 'idCarrera');
    }
}
