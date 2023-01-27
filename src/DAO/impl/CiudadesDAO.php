<?php
namespace EMove\DAO\impl;

use App\Models\Ciudades;
use EMove\DAO\ICiudadesDAO;
use EMove\DTO\CiudadesDTO;

class CiudadesDAO implements ICiudadesDAO{
    public function read(): array{
        $result = [];
        $ciudades = Ciudades::all()->toArray();
        foreach ($ciudades as $ciudad){
            array_push($result, new CiudadesDTO(
                $ciudad['_id'],
                $ciudad["ciudad"],
                $ciudad["foto"],
                $ciudad["destacada"],
                $ciudad["opciones"]
            ));
        }
        return $result;
    }
}
