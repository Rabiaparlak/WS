<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class kotukelime
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
        /*
        if(2>1){
            echo "2 buyuk 1";
        }
        else{
            echo " if sorgusu yanlış";
        }
        */
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'

        ]);
        /*
        $bilgiler=$request->all();
        foreach ($bilgiler as $bilgi){
            echo $bilgi;
            '<br>';
        }
           */
        //return $request->all();
        return $next($request);
    }
}
