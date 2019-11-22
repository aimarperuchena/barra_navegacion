<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table='empleados';
    protected $fillable=['id','nombre','apellido','email','telefono','proyecto', 'departamento_id'];

    public function proyecto()
    {
    return $this->hasOne('App\Proyecto');
    }
    public function departamento()
    {
    return $this->belongsTo('App\Departamento');
    }

    
    
}
