<?php

namespace EMove\DAO\impl;

use EMove\DAO\IAuthDAO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Token;

class AuthDAO implements IAuthDAO
{

    // function register(){
    //     $usuario = new Usuarios();
    //     $usuario->nombre = "User";
    //     $usuario->_id = 2;
    //     $usuario->password = bcrypt("root");
    //     $usuario->save();
    // }

    public function login(Request $request): array
    {
        $credenciales = $request->validate([
            'nombre' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credenciales)) {
            $usuario = Auth::user();
            $token = $usuario->createToken('token')->plainTextToken;

            return [
                "token" => $token,
                '_id' => $usuario->_id,
                'nombre' => $usuario->nombre,
                "responsetype" => Response::HTTP_OK
            ];
        } else {
            return ["message" => "Credenciales Invalidas", "responsetype" => Response::HTTP_FORBIDDEN];
        }
    }

    public function logOut(): bool
    {
        $usuarioAutenticado = Auth::user();
        Token::where('tokenable_id', $usuarioAutenticado->_id)->delete();
        return true;
    }
}
