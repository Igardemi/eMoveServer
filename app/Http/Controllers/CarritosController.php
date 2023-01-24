<?php

namespace App\Http\Controllers;

use App\Models\Carritos;
use Illuminate\Http\Request;

class CarritosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carritos = Carritos::all();
        return response()->json($carritos,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrito = new Carritos();
        $carrito->_id = $request->id;
        $carrito->idCliente = $request->idCliente;
        $carrito->pagado = $request->pagado;
        $carrito->articulos = $request->articulos;
        $carrito->fechaCreacion = $request->fechaCreacion;
        $carrito->save();

        return response()->json($carrito,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
