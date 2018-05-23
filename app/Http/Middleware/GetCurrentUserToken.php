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
        $jwt = trim(preg_replace('/^(?:\s+)?Bearer\s/', '', $request->header('authorization')));
        $token = (new \Lcobucci\JWT\Parser())->parse($jwt);
        $usToken = auth()->user()->tokens->find($token->getHeader("jti"));
        $obj = (object) array(
            'user_agent' => $request->header('user-agent'),
            'ip' => $request->ip(),
            'time' => Carbon::now()->toDateTimeString(),
            'url' => $request->server->get('REQUEST_URI'),
            'method' => $request->method()
        );
        $usToken->last_access = json_encode($obj);
        $usToken->save();
        return $next($request);
    }
}
