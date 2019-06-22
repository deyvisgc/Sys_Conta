<?php

namespace Sys_Conta\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sys_Conta\TipoSeguro;
use Sys_Conta\Planilla;
use Sys_Conta\Renumeraciones;
use Carbon\Carbon;
use Validator;
use Yajra\Datatables\Datatables;
USE Illuminate\Support\Facades\Input;


class PlanillaController extends Controller
{
    public function index(Request $request){
        $planilla=DB::select("SELECT planilla.*,renumeraciones.*,trabajador.*,persona.Dni,CONCAT(persona.nombre_personas,' ',persona.apellidos_Per) as fulname,seguros.nombre_Seguro,tipo_seguro.nombre_tipo FROM planilla ,renumeraciones,trabajador,persona,seguros,tipo_seguro WHERE planilla.idRenumeracion=renumeraciones.idRenumeraciones and planilla.Trabajador_idTrabajador=trabajador.idTrabajador and persona.Trabajador_idTrabajadores=trabajador.idTrabajador and trabajador.seguros_idseguros=seguros.idseguros and trabajador.idTipo_Seguros=tipo_seguro.idTipo_seguro");
        if($request->ajax()){
            return Datatables::of($planilla)->make(true);
        }


        return view('Planilla.planilla');

    }
    public function listarBeneficios($id){
        $planilla=DB::select("SELECT planilla.*,renumeraciones.*,trabajador.*,persona.*,seguros.nombre_Seguro,tipo_seguro.nombre_tipo FROM planilla ,renumeraciones,trabajador,persona,seguros,tipo_seguro WHERE planilla.idRenumeracion=renumeraciones.idRenumeraciones and planilla.Trabajador_idTrabajador=trabajador.idTrabajador and persona.Trabajador_idTrabajadores=trabajador.idTrabajador and trabajador.seguros_idseguros=seguros.idseguros and trabajador.idTipo_Seguros=tipo_seguro.idTipo_seguro AND planilla.idPlanilla=$id");
        return Datatables::of($planilla)->make(true);
    }
    public function ListarRetenciones($id){
        $planilla=DB::select("SELECT planilla.*,renumeraciones.*,trabajador.*,persona.*,seguros.nombre_Seguro,tipo_seguro.nombre_tipo FROM planilla ,renumeraciones,trabajador,persona,seguros,tipo_seguro WHERE planilla.idRenumeracion=renumeraciones.idRenumeraciones and planilla.Trabajador_idTrabajador=trabajador.idTrabajador and persona.Trabajador_idTrabajadores=trabajador.idTrabajador and trabajador.seguros_idseguros=seguros.idseguros and trabajador.idTipo_Seguros=tipo_seguro.idTipo_seguro AND planilla.idPlanilla=$id");
        return Datatables::of($planilla)->make(true);
    }
    public function ListarOtros($id){
        $planilla=DB::select("SELECT planilla.*,renumeraciones.*,trabajador.*,persona.*,seguros.nombre_Seguro,tipo_seguro.nombre_tipo FROM planilla ,renumeraciones,trabajador,persona,seguros,tipo_seguro WHERE planilla.idRenumeracion=renumeraciones.idRenumeraciones and planilla.Trabajador_idTrabajador=trabajador.idTrabajador and persona.Trabajador_idTrabajadores=trabajador.idTrabajador and trabajador.seguros_idseguros=seguros.idseguros and trabajador.idTipo_Seguros=tipo_seguro.idTipo_seguro AND planilla.idPlanilla=$id");
        return Datatables::of($planilla)->make(true);
    }
    public function getPlanilla(){
        $tiposeguro=TipoSeguro::all();
        return view('Planilla.Create')->with('tiposeguro',$tiposeguro);
    }
    public function search(Request $request){
        $search = $request->get('term');
        $persona=DB::table('persona')
            ->join('trabajador','Trabajador_idTrabajadores','=','idTrabajador')
            ->join('seguros','trabajador.seguros_idseguros','=','idseguros')
            ->join('tipo_seguro','trabajador.idTipo_Seguros','=','idTipo_seguro')
            ->select(DB::raw("CONCAT(persona.nombre_personas,' ',persona.apellidos_Per) as full_name"),'Dni','idseguros'
                ,'seguros.nombre_Seguro','tipo_seguro.idTipo_seguro','tipo_seguro.nombre_tipo','aporte_obligatorio','Prima_Seguro',
                'comision_renumeracion','trabajador.*')
            ->where('persona.Dni','LIKE', '%'. $search. '%')->get();
        foreach ($persona as $quer)
        {
            $resulta[] = [ 'value' =>$quer->Dni,'nombre' =>$quer->full_name, 'seguro' =>$quer->nombre_Seguro,
                'nombre_tipo' =>$quer->nombre_tipo,'aporte_obligatorio'=>$quer->aporte_obligatorio,'Prima_Seguro'=>$quer->Prima_Seguro,
                'comision_renumeracion'=>$quer->comision_renumeracion, 'idtrabajador'=>$quer->idTrabajador];
        }
        $data=array('hecho'=>'si','list_persona'=>$resulta);
        echo json_encode($data);
    }
    public function store(Request $request){

        $regla=[
            'ocupasion'=>'required',
            'sueldo_basico' =>'required ',

        ];
        $valida=Validator::make(Input::all(),$regla);
        if ($valida->fails()){
            return response()->json(array('errors' => $valida->getMessageBag()->toArray()));
        } else {
            DB::beginTransaction();
            $renumeracion=new Renumeraciones();

            $renumeracion->Movilidad=$request->movilidad;
            $renumeracion->Alimentacion=$request->alimentacion;
            $renumeracion->Horas_Extras_25=$request->horas_extras25;
            $renumeracion->Horas_Extras_35=$request->horas_extras35;
            $renumeracion->total_renumeracion_bruta=$request->total_renumeracion;
            $renumeracion->Total_descuentoONP=$request->total_Descuento_onp;
            $renumeracion->total_DescuentoAFP=$request->total_Descuento_afp;
            $renumeracion->Renumeracion_neta=$request->renumeracion_neta;
            $renumeracion->Salud=$request->essalud;
            $renumeracion->S_D='10.29';
            $renumeracion->Quinta_Categoria=$request->renta_5_categoria;
            $renumeracion->Renumeracion_otros=$request->bonox_Extras;
            $renumeracion->base_calculo=$request->base_calculo;
            $renumeracion->Prima_Seguros_monto=$request->prima_Seguros_monto;
            $renumeracion->aporte_obligatorio_monto=$request->aporte_obligatorio_total;
            $renumeracion->comisison_sobre_renumeracion_total=$request->comision_renumeracion_total;
            $renumeracion->otros=$request->otros;
            $renumeracion->SCTR=$request->SCTR;
            $renumeracion->descuento_inasistencia=$request->inasistencias;
            $renumeracion->save();
            $planilla=new Planilla();
            $planilla->idRenumeracion=$renumeracion->idRenumeraciones;
            $planilla->Fecha_Ingreso=Carbon::now();
            $planilla->Ocupacion=$request->ocupasion;
            $planilla->CUSPP=$request->cuspp;
            $planilla->Asignacion_familiar=$request->asigna_familiar;
            $planilla->Sueldo_Basico=$request->sueldo_basico;
            $planilla->Trabajador_idTrabajador=$request->idtrabajador;
            $planilla->monto_horasEstrasx25=$request->horas_extras25;
            $planilla->monto_horasEstrasx35=$request->horas_extras35;
            $planilla->dias_laborales=$request->dias_laborales;
            $planilla->total_horas_trabajadas=$request->total_diaslaborales;
            $planilla->dias_faltantes=$request->Faltas;
            $planilla->cts=$request->cts;
            $planilla->vacaciones=$request->vacaciones_trun;
            $planilla->bonificacion=$request->bonificacion;
            $planilla->bonificacion_extraord=$request->bonificacion_extraordinaria;
            $planilla->save();

            DB::commit();

        }
        return response()->json(array("success"=>true));

    }
    public function TotalesIngresos(){
        $totales = DB::select("call Listar_totales");
        return Datatables::of($totales)->make(true);
    }
    public function TotalesAportes(){
        $totales = DB::select("call Listar_totales");
        return Datatables::of($totales)->make(true);
    }
    public function Totales_0tros(){
        $totales = DB::select("call Listar_totales");
        return Datatables::of($totales)->make(true);
    }
    public function AsientoContable(){
        $totales = DB::select("call Listar_totales");
        return response()->json($totales);
    }
    public function Boleta($id){
        $boleta=DB::select("SELECT * FROM persona,trabajador,planilla,seguros,tipo_seguro,renumeraciones,empresa WHERE persona.Trabajador_idTrabajadores=trabajador.idTrabajador 
                                    and trabajador.idempresa=empresa.idEmpresa and trabajador.seguros_idseguros=seguros.idseguros and
                                    trabajador.idTipo_Seguros=tipo_seguro.idTipo_seguro and planilla.Trabajador_idTrabajador=trabajador.idTrabajador and planilla.idRenumeracion=renumeraciones.idRenumeraciones
                                    and planilla.Trabajador_idTrabajador=$id");
        return response()->json($boleta);
    }
    public function DeleTPlanilla($id){
        $planilla=Planilla::find($id);
        $planilla->delete();
        return response()->json(array("success"=>true));
    }



}
