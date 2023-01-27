<?php
namespace EMove\DAO\impl;

use App\Models\Usuarios;
use EMove\DAO\IUsuariosDAO;
use EMove\DTO\UsuariosDTO;

class UsuariosDAO implements IUsuariosDAO{
    public function read(): array{
        $result = [];
        $usuarios = Usuarios::all()->toArray();
        foreach ($usuarios as $usuario){
            array_push($result, new UsuariosDTO(
                $usuario['_id'],
                $usuario["nombre"],
                $usuario["password"]
            ));
        }
        return $result;
    }
}
