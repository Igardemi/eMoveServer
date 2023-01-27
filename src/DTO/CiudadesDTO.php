<?php
namespace EMove\DTO;

use JsonSerializable;

class CiudadesDTO implements JsonSerializable{
    function __construct(private string $_id, private string $ciudad, private string $foto, private bool $destacada, private array $opciones)
    {
        $this->_id=$_id;
        $this->ciudad=$ciudad;
        $this->foto=$foto;
        $this->destacada=$destacada;
        $this->opciones=$opciones;
    }

    function jsonSerialize(): mixed {
        return [
            '_id' => $this->_id,
            'ciudad' => $this->ciudad,
            'foto' => $this->foto,
            'destacada' => $this->destacada,
            'opciones' => $this->opciones
        ];
    }
}
