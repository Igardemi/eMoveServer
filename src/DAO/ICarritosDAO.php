<?php
namespace EMove\DAO;

use EMove\DTO\CarritosDTO;
use Illuminate\Http\Request;

interface ICarritosDAO{
    public function read():array;
    public function findById(int $id): CarritosDTO;
    public function update(Request $request, $id): bool;
    public function delete(int $id): bool;
    public function create(Request $request): bool;
}
