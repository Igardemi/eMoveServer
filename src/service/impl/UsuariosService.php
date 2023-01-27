<?php
namespace EMove\service\impl;

use EMove\DAO\impl\UsuariosDAO;
use EMove\service\IUsuariosService;

class UsuariosService implements IUsuariosService
{
    public function all(): array
    {
        $usuarios = new UsuariosDAO();
        return $usuarios->read();
    }
}
