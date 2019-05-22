<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seguro extends Model
{
    protected $table="seguros";
    protected $primaryKey="idseguros";
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_Seguro', 'Teléfono','Fax','Dirección'
    ];
}
