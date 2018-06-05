<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class GetCurrentUserToken
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
        if( auth()->guard("api")->check() ){
            if( $request->user() != null ){
                if( $request->user()->token() != null ){
                    $token = $request->user()->token();
                    $obj = (object) array(
                        'user_agent' => $request->header('user-agent')??'none',
                        'ip' => $request->ip(),
                        'time' => Carbon::now()->toDateTimeString(),
                        'url' => $request->server->get('REQUEST_URI')??'/',
                        'method' => $request->method()
                    );
                    $last = json_decode( $token->last_access );
                    if($last != null){
                        if ( property_exists( $last , "locate") ) {
                            $obj->locate = $last->locate;
                        }
                    }
                    $token->last_access = json_encode( $obj );
                    $token->save();
                }
            }
        }
        return $next($request);
    }
}
