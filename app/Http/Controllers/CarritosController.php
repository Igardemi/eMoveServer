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
        $carrito->_id = $request->_id;
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
        $carrito=Carritos::get()->where('_id',$id);
        return response()->json(['result'=>$carrito],200);
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
        $cart = Carritos::where('_id',intval($id))->update([
            'idCliente' => $request->idCliente,
            'pagado' => $request->pagado,
            'articulos' => $request->articulos,
            'fechaCreacion' => $request->fechaCreacion,
            ]
        );      
        return response()->json($cart,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo($id);
        Carritos::destroy(intval($id));
        return response()->json(['message'=>"Deleted el elemento con $id"],200);
    }
}
