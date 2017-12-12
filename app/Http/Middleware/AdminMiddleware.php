<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Contracts\Auth\Guard;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
  
    public function handle($request, Closure $next)
    {
        return $next($request);
        // if ($this->auth->guest()) {
        //     if ($request->ajax()) {
        //         return response('Unauthorized.', 401);
        //     } else {
        //         return redirect()->route('index');
        //     }
        // }
        // else{
        //     if($this->auth->user()->role=='admin'){
        //         // die('Is Admin ...');
        //         return $next($request);
        //     }
        //     else{
        //         // die('Not Admin ...');
        //         return redirect()->route('index');
        //     }
        // }
    }
}
