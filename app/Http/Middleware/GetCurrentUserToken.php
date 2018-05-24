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
        if( $request->header('authorization') != null){
            $jwt = trim(preg_replace('/^(?:\s+)?Bearer\s/', '', $request->header('authorization')));
            if( $jwt != '' && $jwt != null){
                $token = (new \Lcobucci\JWT\Parser())->parse($jwt);
                if( $token != null && auth()->guard("api")->check()){
                    $usToken = auth()->guard("api")->user()->tokens->find($token->getHeader("jti"));
                    if($usToken != null){
                        $obj = (object) array(
                            'user_agent' => $request->header('user-agent')??'none',
                            'ip' => $request->ip(),
                            'time' => Carbon::now()->toDateTimeString(),
                            'url' => $request->server->get('REQUEST_URI'),
                            'method' => $request->method()
                        );
                        $usToken->last_access = json_encode($obj);
                        $usToken->save();
                    }
                }
            }
        }
        return $next($request);
    }
}
