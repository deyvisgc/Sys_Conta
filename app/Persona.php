<?php

namespace Sys_Conta;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table="persona";
    protected $primaryKey="idPersona";
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'apellidos_Per','Dni','Care_extranjeria','Telefono','Direccion','Fecha_Nacimiento','Numero_cuenta',
        'Trabajador_idTrabajador','correo','nombre_personas',
    ];

}
