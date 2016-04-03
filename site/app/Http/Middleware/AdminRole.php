<?php

namespace App\Http\Middleware;

use Closure;

class AdminRole
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
              $user = $request->user();
 
        if ($user && $user->isAdmin())
        {
           return new RedirectResponse(url('Administrateur');
        }
       
    
        return $next($request);
    }
}
