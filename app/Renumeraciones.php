<?php

namespace Sys_Conta;

use Illuminate\Database\Eloquent\Model;

class Renumeraciones extends Model
{
    protected $table="renumeraciones";
    protected $primaryKey="idRenumeraciones";
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Movilidad',
        'Alimentacion',
        'Horas_Extras_25',
        'Horas_Extras_35',
        'total_renumeracion_bruta',
        'total_DescuentoAFP_ONP',
        'Renumeracion_neta',
        'Salud',
        'S_D',
        'Quinta_Categoria',
        'Renumeracion_otros',
        'base_calculo',
        'Prima_Seguros_monto',
        'aporte_obligatorio_monto',
        'comisison_sobre_renumeracion_total',
        'otros',
    ];
}
