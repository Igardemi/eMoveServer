<?php
namespace EMove\service\impl;

use EMove\DAO\IAuthDAO;
use EMove\DAO\impl\AuthDAO;
use Illuminate\Http\Request;
use EMove\service\IAuthService;



class AuthService implements IAuthService
{

    private IAuthDAO $auth;

    function __construct()
    {
        $this->auth = new AuthDAO();
    }

    public function login(Request $request):array{
        return $this->auth->login($request);
    }

    public function logout():bool{
        return $this->auth->logout();
    }
}
