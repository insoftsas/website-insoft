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
    public function login(Request $request)
    {
    	try {
            $http = new Client([ 'verify' => false, 'headers' => ['Accept' => 'application/json'] ]);
            $url =  env('APP_URL') . '/api/oauth/token';
            $response = $http->post($url, [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => env('PASSWORD_CLIENT_ID'),
                    'client_secret' => env('PASSWORD_CLIENT_SECRET'),
                    'username' => $request->get('email'),
                    'password' => $request->get('password'),
                    'scope' => '*',
                ]
            ]);
            $contents = (string) $response->getBody();
            $json = json_decode($contents, true);
            return response()->json([
                'data' => $json,
                'message' => 'User logged successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'invalid_credentials',
                //'message' => "{$e->getCode()}: {$e->getMessage()}"
                'message' => "{$e->getMessage()}"
            ], 401);
        }
    }
	public function index(Request $request)
	{
        $token = $request->user()->token();

		$toks = auth()->user()->tokens;

		foreach ($toks as $key => $value) {
			if($token->id == $toks[$key]->id){
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
        $usToken = $request->user()->token();
        $usToken->revoke();
        return $this->sendResponse($usToken, 'Logged Out');	
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