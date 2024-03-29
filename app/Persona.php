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
        'nombre',
        'apellidos',
        'Dni',
        'Care_extranjeria',
        'Telefono',
        'Direccion_Persona',
        'Fecha_Nacimiento',
        'Numero_cuenta',
        'correo',
        'Trabajador_idTrabajadores',

    ];

}
