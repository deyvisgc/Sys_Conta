<?php

namespace Sys_Conta\Http\Controllers;

use Illuminate\Http\Request;
use Sys_Conta\Planilla;
use Sys_Conta\seguro;
use Sys_Conta\Trabajadores;
use Sys_Conta\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trabajador=Trabajadores::count();
        $usuarios=User::count();
        $seguros=seguro::count();
        $Planilla=Planilla::count();
        return view('home',['trabajador'=>$trabajador,'users'=>$usuarios,'seguros'=>$seguros,'planilla'=>$Planilla]);
    }
}
