<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documento';
    protected $primaryKey = 'idDoc';
    protected $fillable = ['nombreDoc','descripciondoc','archivo','idTema'];
    //ya no guarda el created_at, updated_at 
    public $timestamps = false;

    public function curso()
    {
    	return $this->hasOne(Tema::class, 'idTema', 'idTema');
    }
}
