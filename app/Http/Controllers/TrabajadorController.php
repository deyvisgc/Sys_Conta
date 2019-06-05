<?php

namespace Sys_Conta\Http\Controllers;

use Illuminate\Http\Request;
use Sys_Conta\Empresa;
use Sys_Conta\TipoSeguro;
use Sys_Conta\seguro;
use Sys_Conta\Trabajadores;
use Sys_Conta\Persona;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Input;
use Yajra\Datatables\Datatables;
use Validator;


class TrabajadorController extends Controller
{
    public function index(Request $request){
        $trabaja=DB::select("SELECT persona.idPersona, trabajador.idTrabajador, CONCAT(persona.nombre_personas,' ',persona.apellidos_Per) as nombres,persona.Dni,persona.Care_extranjeria,persona.Telefono,persona.Direccion,persona.Fecha_Nacimiento,persona.Numero_cuenta,persona.correo,seguros.nombre_Seguro,tipo_seguro.nombre_tipo,empresa.Razon_Social FROM persona ,trabajador,seguros ,tipo_seguro,empresa WHERE persona.Trabajador_idTrabajadores=trabajador.idTrabajador and trabajador.seguros_idseguros=seguros.idseguros and trabajador.idTipo_Seguros=tipo_seguro.idTipo_seguro and trabajador.idempresa=empresa.idEmpresa and  trabajador.Estado_trabajador='Contratado'");
       if ($request->ajax()){
           return Datatables::of($trabaja)->make(true);
       }
       $empresa=Empresa::all();
        $seguros=seguro::all();
        $tipo_Seguro=TipoSeguro::all();
        return view('Administracion.trabajador',['seguros'=>$seguros,'tipo_Seguro'=>$tipo_Seguro,'empresa'=>$empresa]);
    }
    public function store(Request $request){


        $regla=[
            'nombre_Per'=>'required',
            'Apellido'=>'required',
            'dni'=>'required ',
            'direccion' =>'required ',
            'n_cuenta'=>'required |',
            'Correo'=>'required |',
            'phone'=>'required ',
            'fecha_naci'=>'required ',
            'seguros'=>'required ',
            'tipo_seguros'=>'required ',
        ];
        $valida=Validator::make(Input::all(),$regla);
        if ($valida->fails()){
            return response()->json(array('errors' => $valida->getMessageBag()->toArray()));
        } else {

            DB::beginTransaction();

            $trabajador1=new Trabajadores();
            $trabajador1->Estado_trabajador=$request->Estado_trabajador;
            $trabajador1->seguros_idseguros=$request->seguros;
            $trabajador1->idTipo_Seguros=$request->tipo_seguros;
            $trabajador1->idempresa=$request->empresa;
            $trabajador1->save();
            $trabajador=new Persona();
            $trabajador->Trabajador_idTrabajadores=$trabajador1->idTrabajador;
            $trabajador->nombre_personas=$request->nombre_Per;
            $trabajador->apellidos_Per=$request->Apellido;
            $trabajador->Dni=$request->dni;
            $trabajador->Care_extranjeria=$request->car_extran;
            $trabajador->Direccion=$request->direccion;
            $trabajador->Numero_cuenta=$request->n_cuenta;
            $trabajador->correo=$request->Correo;
            $trabajador->Telefono=$request->phone;
            $trabajador->Fecha_Nacimiento=$request->fecha_naci;
            $trabajador->save();
            DB::commit();

        }
        return response()->json(array("success"=>true));
    }
    public function edit($id){
         $seguro=seguro::all();
         $empresa=Empresa::all();
         $tiposeguro=TipoSeguro::all();
        $trabaja=DB::select("SELECT persona.idPersona,trabajador.idTrabajador,persona.nombre_personas,persona.apellidos_Per,persona.Dni,persona.Care_extranjeria,persona.Telefono,persona.Direccion,persona.Fecha_Nacimiento,persona.Numero_cuenta,persona.correo,seguros.nombre_Seguro,tipo_seguro.nombre_tipo,empresa.Razon_Social,trabajador.seguros_idseguros,trabajador.idTipo_Seguros,trabajador.idempresa FROM persona ,trabajador,seguros ,tipo_seguro,empresa WHERE persona.Trabajador_idTrabajadores=trabajador.idTrabajador and trabajador.seguros_idseguros=seguros.idseguros and trabajador.idTipo_Seguros=tipo_seguro.idTipo_seguro and trabajador.idempresa=empresa.idEmpresa and  trabajador.Estado_trabajador='Contratado' and persona.idPersona=$id");
        $data=array('segu'=>$seguro,'tipo_segu'=>$tiposeguro,'trabaja'=>$trabaja,'empre'=>$empresa);

        return response()->json($data);
    }
    public function update(Request $request,$id){

        $regla=[
            'nombre_Per'=>'required',
            'Apellido'=>'required',
            'dni'=>'required ',
            'direccion' =>'required ',
            'n_cuenta'=>'required |',
            'Correo'=>'required |',
            'phone'=>'required ',
            'fecha_nacimiento'=>'required ',
            'seguro'=>'required ',
            'tipo_Seguros'=>'required ',
        ];
        $valida=Validator::make(Input::all(),$regla);
        if ($valida->fails()){
            return response()->json(array('errors' => $valida->getMessageBag()->toArray()));
        } else {
            DB::beginTransaction();
            $Persona=Persona::find($id);

            $Persona->nombre_personas=$request->nombre_Per;
            $Persona->apellidos_Per=$request->Apellido;
            $Persona->Dni=$request->dni;
            $Persona->Care_extranjeria=$request->car_extran;
            $Persona->Direccion=$request->direccion;
            $Persona->Numero_cuenta=$request->n_cuenta;
            $Persona->correo=$request->Correo;
            $Persona->Telefono=$request->phone;
            $Persona->Fecha_Nacimiento=$request->fecha_nacimiento;
            $Persona->save();
            $trabajador=Trabajadores::find(Input::get('id_trabajador'));
            $trabajador->seguros_idseguros=$request->seguro;
            $trabajador->idTipo_Seguros=$request->tipo_Seguros;
            $trabajador->idempresa=$request->empresa;
                $trabajador->save();

            DB::commit();

        }
        return response()->json(array("success"=>true));

    }
    public function destroy($id){



    }
    public function DeleTrabajador($id){
        $trabajador=Persona::find($id);
        $trabajador->delete();
        return response()->json(array("success"=>true));
    }

}
