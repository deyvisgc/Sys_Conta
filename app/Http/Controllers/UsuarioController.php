<?php

namespace Sys_Conta\Http\Controllers;

use Illuminate\Http\Request;
use Sys_Conta\Persona;
use Sys_Conta\rol;
use Sys_Conta\User;
use Validator;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Input;
use Yajra\Datatables\Datatables;
class UsuarioController extends Controller
{
    public function index(Request $request){
        $rol=rol::all();
        $usuarios=DB::table('usuarios')
            ->join('persona','Persona_idPersona','=','idPersona')
            ->join('rol','Rol_idRol','=','idRol')
            ->select('usuarios.*',DB::raw("CONCAT(persona.nombre_personas,' ',persona.apellidos_Per) as full_name"),
                'persona.*','rol.*')
            ->where('user_estado','=','ACTIVO')->get();
        if ($request->ajax()){
            return Datatables::of($usuarios)->make(true);
        }

        return view('Administracion.usuario',['roles'=>$rol]);
    }
    public function store(Request $request){

        $regla=[
            'nombre_Per'=>'required',
            'apellidos'=>'required',
            'direccion' =>'required ',
            'n_cuenta'=>'required |',
            'Correo'=>'required |',
            'phone'=>'required ',
            'fecha_nacimiento'=>'required ',
            'estado'=>'required ',
            'usuario'=>'required', 'email', 'max:255', 'unique:users',
            //'foto'=>'mimes:jpeg,bmp,png'
        ];
        $valida=Validator::make(Input::all(),$regla);
        if ($valida->fails()){
            return response()->json(array('errors' => $valida->getMessageBag()->toArray()));
        }
        else {
            DB::beginTransaction();
            $persona=new Persona();
            $persona->nombre_personas=$request->nombre_Per;
            $persona->apellidos_Per=$request->apellidos;
            $persona->Dni=$request->dni;
            $persona->Care_extranjeria=$request->car_extran;
            $persona->Telefono=$request->phone;
            $persona->Direccion_Persona=$request->direccion;
            $persona->Fecha_Nacimiento=$request->fecha_nacimiento;
            $persona->Numero_cuenta=$request->n_cuenta;
            $persona->correo=$request->Correo;
            $persona->save();
            $usuarios=new User();
            $usuarios->Persona_idPersona=$persona->idPersona;
            $usuarios->usuario=$request->get('usuario');
            $usuarios->password=bcrypt($request->get('password'));
            if ($usuarios->foto!=null){


                if(Input::HasFile('foto')){
                    $file=Input::file('foto');
                    $file->move(public_path().'/Imagenes/Usuario',$file->getClientOriginalName());
                    $usuarios->foto=$file->getClientOriginalName();
                } else{
                    $usuarios->foto='usuario.jpg';
                }
            }
            $usuarios->Rol_idRol=$request->get('rol');
            $usuarios->user_estado=$request->get('estado');
            $usuarios->save();
            DB::commit();
        }
        return response()->json(array("success"=>true));

    }
    public function DeleTUsuario($id){
        $User=User::find($id);
        $User->delete();
        return response()->json(array("success"=>true));
    }
}
