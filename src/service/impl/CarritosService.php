<?php
namespace EMove\service\impl;

use EMove\DAO\ICarritosDAO;
use EMove\DAO\impl\CarritosDAO;
use EMove\DTO\CarritosDTO;
use EMove\service\ICarritosService;
use Illuminate\Http\Request;

class CarritosService implements ICarritosService
{
    private ICarritosDAO $carritos;

    function __construct()
    {
        $this->carritos = new CarritosDAO();
    }

    public function all(): array{
        return $this->carritos->read();
    }

    public function find($id): CarritosDTO
    {
        return $this->carritos->findById($id);
    }

    public function insert(Request $request): bool
    {
        return $this->carritos->create($request);
    }

    public function update(Request $request, $id): bool
    {
        return $this->carritos->update($request,$id);;
    }

    public function delete($id): bool
    {
        return $this->carritos->delete($id);
    }
}
