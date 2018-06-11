<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    protected $table = 'tarea';
    protected $primaryKey = 'idTarea';
    protected $fillable = ['fechaInicio','fechaFin','descripcion','idTema','fechaEntrega','documento','estadoEntrega'];
    //ya no guarda el created_at, updated_at 
    public $timestamps = false;

    public function tema()
    {
        return $this->hasOne(Tema::class, 'idTema', 'idTema');
    }
}
