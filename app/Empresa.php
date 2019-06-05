<?php

namespace Sys_Conta;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{

    protected $table="empresa";
    protected $primaryKey="idEmpresa";
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Razon_Social','Ruc','Direccion','fecha_creacion','telefono_empresa','correo_empresa',
    ];
}
