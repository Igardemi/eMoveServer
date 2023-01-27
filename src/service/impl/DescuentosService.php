<?php
namespace EMove\service\impl;

use EMove\DAO\impl\DescuentosDAO;
use EMove\service\IDescuentosService;

class DescuentosService implements IDescuentosService
{
    public function all(): array
    {
        $descuentos = new DescuentosDAO();
        return $descuentos->read();
    }
}
