<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	protected $table = 'curso';
    protected $primaryKey = 'idCurso';
    protected $fillable = ['nombreCurso','objetivos','descripcion','codigoCurso','fechaCreacion'];
    //ya no guarda el created_at, updated_at 
    public $timestamps = false;

    public function curso_usuario()
    {
        return $this->hasMany('App\Curso_Usuario', 'idCurso', 'idCurso');
    }
    public function tema()
    {
    	return $this->hasMany('App\Tema', 'idCurso', 'idCurso');
    }
}
