<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoSeguro;
use App\seguro;
use App\Trabajadores;
use App\Persona;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Input;
use Yajra\Datatables\Datatables;
use Validator;


class TrabajadorController extends Controller
{
    public function index(Request $request){
        $trabaja=DB::select("SELECT persona.idPersona, trabajador.idTrabajador, CONCAT(persona.nombre_personas,' ',persona.apellidos_Per) as nombres,persona.Dni,persona.Care_extranjeria,persona.Telefono,persona.Direccion,persona.Fecha_Nacimiento,persona.Numero_cuenta,persona.correo,seguros.nombre_Seguro,tipo_seguro.nombre_tipo FROM persona ,trabajador,seguros ,tipo_seguro WHERE persona.Trabajador_idTrabajador=trabajador.idTrabajador and trabajador.seguros_idseguros=seguros.idseguros and trabajador.idTipo_Seguro=tipo_seguro.idTipo_seguro and trabajador.estado='Contratado'");
       if ($request->ajax()){
           return Datatables::of($trabaja)->make(true);
       }
        $seguros=seguro::all();
        $tipo_Seguro=TipoSeguro::all();
        return view('Administracion.trabajador',['seguros'=>$seguros,'tipo_Seguro'=>$tipo_Seguro]);
    }
    public function store(Request $request){


        $regla=[
            'nombre_Per'=>'required',
            'Apellido'=>'required',
            'dni'=>'required ',
            'car_extran'=>'required',
            'direccion' =>'required ',
            'n_cuenta'=>'required |',
            'Correo'=>'required |',
            'phone'=>'required ',
            'fecha_naci'=>'required ',
            'estado'=>'required ',
            'seguros'=>'required ',
            'tipo_seguros'=>'required ',
        ];
        $valida=Validator::make(Input::all(),$regla);
        if ($valida->fails()){
            return response()->json(array('errors' => $valida->getMessageBag()->toArray()));
        } else {

            DB::beginTransaction();

            $trabajador1=new Trabajadores();
            $trabajador1->estado=$request->estado;
            $trabajador1->seguros_idseguros=$request->seguros;
            $trabajador1->idTipo_Seguro=$request->tipo_seguros;
            $trabajador1->save();

            $trabajador=new Persona();
            $trabajador->Trabajador_idTrabajador=$trabajador1->idTrabajador;
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
         $tiposeguro=TipoSeguro::all();
        $trabaja=DB::select("SELECT seguros.idseguros,tipo_seguro.idTipo_seguro, persona.idPersona,persona.Trabajador_idTrabajador, trabajador.idTrabajador,persona.nombre_personas,persona.apellidos_Per,persona.Dni,persona.Care_extranjeria,persona.Telefono,persona.Direccion,persona.Fecha_Nacimiento,persona.Numero_cuenta,persona.correo,seguros.nombre_Seguro,tipo_seguro.nombre_tipo,trabajador.estado FROM persona ,trabajador,seguros ,tipo_seguro WHERE persona.Trabajador_idTrabajador=trabajador.idTrabajador and trabajador.seguros_idseguros=seguros.idseguros and trabajador.idTipo_Seguro=tipo_seguro.idTipo_seguro and trabajador.estado='Contratado' 

                    and persona.idPersona=$id");
        $data=array('seguro'=>$seguro,'tipo_seguro'=>$tiposeguro,'trabaja'=>$trabaja);

        return response()->json($data);
    }
    public function update(Request $request,$id){

        $regla=[
            'nombre_Per'=>'required',
            'Apellido'=>'required',
            'dni'=>'required ',
            'car_extran'=>'required',
            'direccion' =>'required ',
            'n_cuenta'=>'required |',
            'Correo'=>'required |',
            'phone'=>'required ',
            'fecha_nacimiento'=>'required ',
            'estado'=>'required ',
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
            $trabajador->estado=$request->estado;
            $trabajador->seguros_idseguros=$request->seguro;
            $trabajador->idTipo_Seguro=$request->tipo_Seguros;
                $trabajador->save();

            DB::commit();

        }
        return response()->json(array("success"=>true));

    }
}
