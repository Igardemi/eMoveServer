<?php
namespace EMove\DTO;

use JsonSerializable;

class CarritosDTO implements JsonSerializable{
    function __construct(private int $_id, private int $idCliente, private bool $pagado, private array $articulos, private string $fechaCreacion)
    {
        $this->_id=$_id;
        $this->idCliente=$idCliente;
        $this->pagado=$pagado;
        $this->articulos=$articulos;
        $this->fechaCreacion=$fechaCreacion;
    }

    function jsonSerialize(): mixed {
        return [
            '_id' => $this->_id,
            'idCliente' => $this->idCliente,
            'pagado' => $this->pagado,
            'articulos' => $this->articulos,
            'fechaCreacion' => $this->fechaCreacion
        ];
    }

}
