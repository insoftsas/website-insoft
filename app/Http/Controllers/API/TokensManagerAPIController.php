<?php

namespace App\Http\Controllers\API;
use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;


class TokensManagerAPIController extends AppBaseController
{
	public function __construct()
    {
        $this->middleware('auth:api');
    }

	public function index(Request $request)
	{
		$jwt = trim(preg_replace('/^(?:\s+)?Bearer\s/', '', $request->header('authorization')));
        $token = (new \Lcobucci\JWT\Parser())->parse($jwt);

		$toks = auth()->user()->tokens;
		foreach ($toks as $key => $value) {
			if($token->getHeader("jti") == $toks[$key]->id){
				$toks[$key]->current = true;
			}else{
				$toks[$key]->current = false;
			}
		}
		return $this->sendResponse($toks->toArray(), 'Tokens retrieved successfully');	
	}

	public function user()
	{
		return $this->sendResponse(auth()->user(), 'User retrieved successfully');	
	}

	public function show($id)
	{	
		$token = auth()->user()->tokens->find($id);
		if($token==null){
            return $this->sendError('Token not found');
		}

        return $this->sendResponse($token, 'Token retrieved successfully');	
	}

	public function logout(Request $request)
	{	
		$jwt = trim(preg_replace('/^(?:\s+)?Bearer\s/', '', $request->header('authorization')));
        $token = (new \Lcobucci\JWT\Parser())->parse($jwt);
        $usToken = auth()->user()->tokens->find($token->getHeader("jti"));
        $usToken->revoke();
        return $this->sendResponse($token, 'Logged Out');	
	}

	public function destroy($id)
	{	
		$token = auth()->user()->tokens->find($id);
		if($token!=null){
			$token->revoke();
		}else{
            return $this->sendError('Token not found');
        }


        return $this->sendResponse($id, 'Token deleted successfully');	
	}
}