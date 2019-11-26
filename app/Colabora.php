<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colabora extends Model
{
    protected $table='colabora';
    protected $fillable=['id','empleado_id','proyecto_id','fechainicio','fechafinal'];

    public function empleado(){
        return $this->hasMany('App\Empleado');
    }
}
