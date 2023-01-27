<?php
namespace EMove\DTO;

use JsonSerializable;

class DescuentosDTO implements JsonSerializable{

    function __construct(private string $_id, private string $codigo, private int $descuento)
    {
        $this->_id=$_id;
        $this->codigo=$codigo;
        $this->descuento=$descuento;
    }

    function jsonSerialize(): mixed {
        return [
            '_id' => $this->_id,
            'codigo' => $this->codigo,
            'descuento' => $this->descuento
        ];
    }
}
