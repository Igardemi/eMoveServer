<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EMove\service\IAuthService;
use EMove\service\impl\AuthService;


class AuthController extends Controller
{

    private IAuthService $servicio;
    function __construct()
    {
        $this->servicio = new AuthService();
    }

    function login(Request $request){
        $response = $this->servicio->login($request);
        return response()->json($response, $response["responsetype"]);
    }

    public function logOut(){
        return  $this->servicio->logOut();
    }

}
