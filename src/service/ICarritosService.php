<?php
namespace EMove\service;

use EMove\DTO\CarritosDTO;
use Illuminate\Http\Request;

interface ICarritosService {
    public function all(): array;
    public function find($id): CarritosDTO;
    public function insert(Request $request);
    public function update(Request $request, $id):bool;
    public function delete($id):bool;
}
