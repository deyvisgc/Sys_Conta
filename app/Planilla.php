<?php

namespace Sys_Conta;

use Illuminate\Database\Eloquent\Model;

class Planilla extends Model
{
    protected $table="planilla";
    protected $primaryKey="idPlanilla";
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Fecha_Ingreso',
        'Ocupacion',
        'Asignacion_familiar',
        'Sueldo_Basico',
        'Trabajador_idTrabajador',
        'CUSPP',
        'idRenumeracion',
        'monto_horasEstrasx25',
        'monto_horasEstrasx35',
        'dias_faltantes',
        'cts',
        'vacaciones',
        'bonificacion',
        'bonificacion_extraord',
        'dias_laborales',
        'total_horas_trabajadas',
    ];
}
