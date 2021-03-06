<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table='departamentos';
    protected $fillable=['id','nombre'];

    public function empleados(){
        return $this->hasMany('App\Empleado');
    }

    public function jefe()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }
}
