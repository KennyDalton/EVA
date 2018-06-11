<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $table = 'tema';
    protected $primaryKey = 'idTema';
    protected $fillable = ['nombreTema','descripcionTema','contenido','idCurso'];
    //ya no guarda el created_at, updated_at 
    public $timestamps = false;

    public function tema()
    {
        return $this->hasMany('App\Tarea', 'idTema', 'idTema');
    }
    public function curso()
    {
    	return $this->hasOne(Curso::class, 'idCurso', 'idCurso');
    }
}
