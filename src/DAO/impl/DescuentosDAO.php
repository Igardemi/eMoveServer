<?php
namespace EMove\DAO\impl;

use App\Models\Descuentos;
use EMove\DAO\IDescuentosDAO;
use EMove\DTO\DescuentosDTO;

class DescuentosDAO implements IDescuentosDAO{
    public function read(): array{
        $result = [];
        $descuentos = Descuentos::all()->toArray();
        foreach ($descuentos as $descuento){
            array_push($result, new DescuentosDTO(
                $descuento['_id'],
                $descuento["codigo"],
                $descuento["descuento"]
            ));
        }
        return $result;
    }
}
