<?php
namespace EMove\DAO\impl;

use App\Models\Carritos;
use EMove\DAO\ICarritosDAO;
use EMove\DTO\CarritosDTO;
use Illuminate\Http\Request;

class CarritosDAO implements ICarritosDAO{
    public function read(): array{
        $result = [];
        $carritos = Carritos::get()->toArray();
        foreach ($carritos as $carrito){
            array_push($result, new CarritosDTO(
                $carrito['_id'],
                $carrito["idCliente"],
                $carrito["pagado"],
                $carrito["articulos"],
                $carrito["fechaCreacion"]
            ));
        }
        return $result;
    }

    public function create(Request $request){
        $carrito = new Carritos();
        $carrito->_id = $request->_id;
        $carrito->idCliente = $request->idCliente;
        $carrito->pagado = $request->pagado;
        $carrito->articulos = $request->articulos;
        $carrito->fechaCreacion = $request->fechaCreacion;
        $carrito->save();

        return $carrito;
    }

    public function findById($id): CarritosDTO{
        $carrito = Carritos::all()->find($id);
        $result = new CarritosDTO(
            $carrito['_id'],
            $carrito["idCliente"],
            $carrito["pagado"],
            $carrito["articulos"],
            $carrito["fechaCreacion"]
        );
        return $result;
    }

    public function delete(int $id): bool
    {
        return Carritos::destroy(intval($id));
    }

    public function update(Request $request, $id): bool
    {
        $cart = Carritos::where('_id',intval($id))->update([
            'idCliente' => $request->idCliente,
            'pagado' => $request->pagado,
            'articulos' => $request->articulos,
            'fechaCreacion' => $request->fechaCreacion,
            ]
        );
        return $cart;
    }
}
