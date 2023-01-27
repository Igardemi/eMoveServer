<?php
namespace EMove\DTO;

use JsonSerializable;

class UsuariosDTO implements JsonSerializable{

    function __construct(private int $_id, private string $nombre, private string $password)
    {
        $this->_id=$_id;
        $this->nombre=$nombre;
        $this->password=$password;
    }

    function jsonSerialize(): mixed {
        return [
            '_id' => $this->_id,
            'nombre' => $this->nombre,
            'password' => $this->password
        ];
    }
}
