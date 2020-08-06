<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;
class Admin
{

  protected $auth;
    public function __construct(Guard $auth){

      $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      switch ($this->auth->user()->rol_id) {
          case '1':
            // Administrador...
          //  return redirect()->to('administrador');
            break;
            case '2':
              // Administrador...
            return redirect()->to('usuario');
              break;
          default:
            // code...
            return redirect()->to('login');
            break;
        }
        return $next($request);
    }
}
