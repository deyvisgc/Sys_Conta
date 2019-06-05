<?php

namespace Sys_Conta;

use Illuminate\Database\Eloquent\Model;

class Trabajadores extends Model
{
    protected $table="trabajador";
    protected $primaryKey="idTrabajador";
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Estado_trabajador', 'seguros_idseguros','idTipo_Seguros','idempresa','tra_hijos','Periodo_trabajo','fecha_Ingreso',
        'fecha_Salida',
    ];

}
