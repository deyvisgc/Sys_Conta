<?php

namespace Sys_Conta\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index(){
        return view('Perfil.perfil');
    }
}
