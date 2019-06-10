<?php

namespace Sys_Conta\Http\Controllers;

use Illuminate\Http\Request;
use Sys_Conta\asiento;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Input;
use Yajra\Datatables\Datatables;

class AsientoController extends Controller
{
    public function index(Request $request){
        $asiento=DB::select("select * from asientocontable");
        if ($request->ajax()){
            return Datatables::of($asiento)->make(true);
        }

        return view('Planilla.Listar_Asiento');
    }
    public function store(Request $request){
          $asientoContable=new asiento();
          $asientoContable->asiento_renumeracion=$request->renumeraciones;
        $asientoContable->asiento_renumeracion=$request->renumeraciones1;
        $asientoContable->asiento_seguridad_prevencion=$request->seguridad_prevision;
        $asientoContable->asiento_seguridad_prevencion=$request->seguridad_prevision1;
        $asientoContable->Asiento_Regimen=$request->regimen_presentaciones;
        $asientoContable->Asiento_Regimen=$request->regimen_presentaciones1;
        $asientoContable->Aiento_Seguro_complementario=$request->seguro_complementario;
        $asientoContable->Aiento_Seguro_complementario=$request->seguro_complementario1;

        $asientoContable->Aiento_Instituciones_publicas=$request->instituciones_publicas;
        $asientoContable->Aiento_Instituciones_publicas=$request->instituciones_publicas1;
        $asientoContable->Asiento_Essalud=$request->essalud;
        $asientoContable->Asiento_Essalud=$request->essalud1;

        $asientoContable->Asiento_Onp=$request->onp;
        $asientoContable->Asiento_Onp=$request->onp1;
        $asientoContable->Asiento_otras_situaciones=$request->otras_instituciones;
        $asientoContable->Asiento_otras_situaciones=$request->otras_instituciones1;

        $asientoContable->Asiento_SCTR=$request->sctr;
        $asientoContable->Asiento_SCTR=$request->sctr1;
        $asientoContable->Asiento_Renumeraciones_pagar=$request->renumeracion_pagar;
        $asientoContable->Asiento_Renumeraciones_pagar=$request->renumeracion_pagar1;

        $asientoContable->Asiento_Otras_cuenta=$request->otras_cuentas;
        $asientoContable->Asiento_Otras_cuenta=$request->otras_cuentas1;
        $asientoContable->Asiento_AFP=$request->afp;
        $asientoContable->Asiento_AFP=$request->afp1;

        $asientoContable->Debe=$request->gastos_personal;
        $asientoContable->Asiento_atributos_Aporte=$request->tributs_aportes;
        $asientoContable->Asiento_atributos_Aporte=$request->tributs_aportes1;

        $asientoContable->Asiento_Remuraciones_Participaciones=$request->tributs_participaciones;
        $asientoContable->Asiento_Remuraciones_Participaciones=$request->tributs_participaciones1;
        $asientoContable->Asiento_Cuentas_Pagar=$request->cuentas_diversas;
        $asientoContable->Asiento_Cuentas_Pagar=$request->cuentas_diversas1;
        $asientoContable->Haber=$request->total_haber;
        $asientoContable->save();

        return response()->json(array("success"=>true));

    }
}
