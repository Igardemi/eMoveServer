<?php
namespace EMove\service\impl;

use EMove\DAO\impl\CiudadesDAO;
use EMove\service\ICiudadesService;

class CiudadesService implements ICiudadesService
{
    public function all(): array
    {
        $ciudades = new CiudadesDAO();
        return $ciudades->read();
    }
}
