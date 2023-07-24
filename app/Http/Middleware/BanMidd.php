<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class BanMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::check() && Auth::user()->status){
            $banned = Auth::user()->status == "1";
            Auth::logout();
            if($banned=="1"){
                $message = 'Your account  is banned,contact Admin';
            }

            return redirect('login')->with('status_ban',$message);
        }


        return $next($request);
    }
}
