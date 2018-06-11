<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso_Usuario extends Model
{
    protected $table = 'curso_usuario';
    protected $fillable = ['id','idCurso'];
    //ya no guarda el created_at, updated_at 
    public $timestamps = false;

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'id');
    }
    public function curso()
    {
        return $this->hasOne(Curso::class, 'idCurso', 'idCurso');
    }
}
