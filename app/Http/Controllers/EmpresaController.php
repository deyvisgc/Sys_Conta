<?php

namespace Sys_Conta\Http\Controllers;

use Illuminate\Http\Request;
use Sys_Conta\Empresa;
use Validator;

use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Input;
use Yajra\Datatables\Datatables;
class EmpresaController extends Controller
{
    public function index(Request $request){
        $empresa=DB::select("SELECT * FROM empresa");
        if ($request->ajax()){
            return Datatables::of($empresa)->make(true);
        }
        return view('Administracion.empresa');
    }
    public function store(Request $request){
        $regla=[
            'Razon_social'=>'required',
            'RUC'=>'required',
            'direccion'=>'required ',
            'Fecha' =>'required ',
            'Telefono'=>'required |',
            'Correo'=>'required |',

        ];
        $valida=Validator::make(Input::all(),$regla);
        if ($valida->fails()){
            return response()->json(array('errors' => $valida->getMessageBag()->toArray()));
        }else{
           $empresa=new Empresa();
           $empresa->Razon_Social=$request->Razon_social;
            $empresa->Ruc=$request->RUC;
            $empresa->Direccion=$request->direccion;
            $empresa->fecha_creacion=$request->Fecha;
            $empresa->telefono_empresa=$request->Telefono;
            $empresa->correo_empresa=$request->Correo;
            $empresa->save();
        }
        return response()->json(array("success"=>true));
    }
    function DeleEmpresa($id){
        $User=Empresa::find($id);
        $User->delete();
        return response()->json(array("success"=>true));
    }
}
