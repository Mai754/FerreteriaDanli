<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PermisoEditor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($this->permiso())
        return $next($request);
        return redirect('/')->with('mensaje', 'No tiene permiso para entrar aqui');
    }

    private function permiso(){
        return session()->get('rol_nombre') == 'Editor';
    }
}
