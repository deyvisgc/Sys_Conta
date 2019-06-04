<?php

namespace Sys_Conta;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table="rol";
    protected $primaryKey="idRol";
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Estado_rol','nombre_rol',
    ];
}
