<?php

namespace Sys_Conta\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PlanillaController extends Controller
{
    public function index(){
        return view('Planilla.planilla');

    }
    public function getPlanilla(){
        return view('Planilla.Create');
    }
    public function search(Request $request){
        $search = $request->get('term');
        $persona=DB::table('persona')
            ->join('trabajador','Trabajador_idTrabajador','=','idTrabajador')
            ->join('seguros','trabajador.seguros_idseguros','=','idseguros')
            ->join('tipo_seguro','trabajador.idTipo_Seguros','=','idTipo_seguro')

            ->select(DB::raw("CONCAT(persona.nombre_personas,' ',persona.apellidos_Per) as full_name"),'Dni','idseguros','seguros.nombre_Seguro','tipo_seguro.idTipo_seguro','tipo_seguro.nombre_tipo','trabajador.*')
            ->where('persona.Dni','LIKE', '%'. $search. '%')->get();

        foreach ($persona as $quer)
        {
            $resulta[] = [ 'value' =>$quer->Dni,'nombre' =>$quer->full_name, 'seguro' =>$quer->nombre_Seguro,'nombre_tipo' =>$quer->nombre_tipo];
        }
        $data=array('hecho'=>'si','list_persona'=>$resulta);

        echo json_encode($data);


    }

}
