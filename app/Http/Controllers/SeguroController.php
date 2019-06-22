<?php

namespace Sys_Conta\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sys_Conta\Empresa;
use Sys_Conta\seguro;
use Sys_Conta\TipoSeguro;
use Yajra\DataTables\DataTables;

class SeguroController extends Controller
{public function index(Request $request){
    $seguro=seguro::all();
    if ($request->ajax()){
        return Datatables::of($seguro)->make(true);
    }
    return view('Administracion.seguros');
}

public function store(Request $request){
    $seguro=new seguro();
    $seguro->nombre_Seguro=$request->nombre_seguro;
    $seguro->aporte_obligatorio=$request->aporte_obligatorio;
    $seguro->Prima_Seguro=$request->prima_seguros;
    $seguro->comision_renumeracion=$request->comision;
    $seguro->save();
    return response()->json(array("success"=>true));
}
public function SegurosDelete($id){

    $seguros=seguro::find($id);
    $seguros->delete();
    return response()->json(array("success"=>true));
}
    public function edit($id){
        $seguros=seguro::find($id);
        return response()->json($seguros);
    }

    public function update(Request $request,$id){
        $seguro=seguro::find($id);
        $seguro->nombre_Seguro=$request->nombre_seguro;
        $seguro->aporte_obligatorio=$request->aporte_obligatorio;
        $seguro->Prima_Seguro=$request->prima_seguros;
        $seguro->comision_renumeracion=$request->comision;
        $seguro->update();
        return response()->json(array("success"=>true));
    }

}
