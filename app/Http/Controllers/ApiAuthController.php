<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller
{
    public function login()
    {
        $credentials = request(['email', 'password']);
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $success['token'] =  $user->createToken('superLoop')-> accessToken;
            $success['name'] =  $user->name;
            return $this->sendResponse($success, 'Login success');
        }

    }
}
