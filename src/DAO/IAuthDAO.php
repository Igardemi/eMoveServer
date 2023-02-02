<?php
namespace EMove\DAO;

use Illuminate\Http\Request;

interface IAuthDAO{
    public function login(Request $request):array;
    public function logout():bool;
}
