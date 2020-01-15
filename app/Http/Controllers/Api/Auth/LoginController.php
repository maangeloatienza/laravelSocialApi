<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only(['username','password']);

        if(!$token = Auth::attempt($credentials)){
            return response()->json([
                'message' => 'Incorrect email/password',
            ],401);
        }

        return $this->respondWithToken($token,Auth::user());
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token, $user)
    {
        return response()->json([
            'data' => $user,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL()
        ]);
    }


}
