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
        if( !is_null($request->header('authorization')) && auth()->guard("api")->check()){

            $jwt = trim(preg_replace('/^(?:\s+)?Bearer\s/', '', $request->header('authorization')));
            
            if( $jwt != '' && !is_null($jwt) && $jwt != 'Bearer'){

                $token = (new \Lcobucci\JWT\Parser())->parse($jwt);

                if( !is_null($token)){
                    $usToken = auth()->guard("api")->user()->tokens->find($token->getHeader("jti"));
                    if( !is_null($usToken) ){
                        $obj = (object) array(
                            'user_agent' => $request->header('user-agent')??'none',
                            'ip' => $request->ip(),
                            'time' => Carbon::now()->toDateTimeString(),
                            'url' => $request->server->get('REQUEST_URI')??'/',
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
