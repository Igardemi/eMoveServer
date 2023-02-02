<?php
namespace EMove\service;

use Illuminate\Http\Request;


interface IAuthService {
    public function login(Request $request):array;
    public function logout():bool;
}
