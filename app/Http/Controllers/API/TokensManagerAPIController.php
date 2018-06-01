<?php

namespace App\Http\Controllers\API;
use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use GuzzleHttp\Client;

class TokensManagerAPIController extends AppBaseController
{
	public function __construct()
    {
        $this->middleware('auth:api')->except('login');
        $this->middleware('guest:api')->only('login');
    }
    public function login(Request $request)
    {
    	try {
            $http = new Client([ 'verify' => false, 'headers' => ['Accept' => 'application/json'] ]);
            $url =  env('APP_URL') . '/oauth/token';
            $response = $http->post($url, [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => env('MIX_OAUTH_CLIENT_ID'),
                    'client_secret' => env('MIX_OAUTH_CLIENT_KEY'),
                    'username' => $request->get('username'),
                    'password' => $request->get('password'),
                    'scope' => '*'
                ]
            ]);
            $contents = (string) $response->getBody();
            $json = json_decode($contents, true);
            return response()->json([
                'data' => $json,
                'message' => 'User logged successfully'
            ]);
        } catch (\Exception $e) {
            $json = json_decode($e->getResponse()->getBody()->getContents(), true);
            return response()->json([
                'error' => 'invalid_credentials',
                //'message' => "{$e->getCode()}: {$e->getMessage()}"
                'message' => "{$json['hint']}"
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