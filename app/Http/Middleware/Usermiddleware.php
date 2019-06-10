<?php

namespace Sys_Conta\Http\Middleware;

use Closure;

class Usermiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $usuario_actual=\Auth::user();
        if($usuario_actual->Rol_idRol!=2){
            return redirect()->route('mensaje');
        }
        return $next($request);
    }
}
