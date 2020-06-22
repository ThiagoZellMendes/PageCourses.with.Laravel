<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoUser
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
        if (!session('nome')){
            return redirect('login')->with('erro', 'Sessão expirada');
        }
        
        return $next($request);
    }
}
