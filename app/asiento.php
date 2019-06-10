<?php

namespace Sys_Conta;

use Illuminate\Database\Eloquent\Model;

class asiento extends Model
{
    protected $table="asientocontable";
    protected $primaryKey="idAsientoContable";
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numero_de_Asiento',
        'Haber',
        'Debe',
        'asiento_seguridad_prevencion',
        'Renumeraciones_idRenumeraciones',
        'asiento_renumeracion',
        'Asiento_Regimen',
        'Aiento_Seguro_complementario',
        'Aiento_Instituciones_publicas',
        'Asiento_Essalud',
        'Asiento_Onp',
        'Asiento_otras_situaciones',
        'Asiento_SCTR',
        'Asiento_Renumeraciones_pagar',
        'Asiento_Otras_cuenta',
        'Asiento_AFP',
        'Asiento_atributos_Aporte',
        'Asiento_Remuraciones_Participaciones',
        'Asiento_Cuentas_Pagar',



    ];
}
