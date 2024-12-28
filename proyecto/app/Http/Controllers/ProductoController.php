<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Categoria;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$productos= DB::select("SELECT * FROM productos");
        $productos= Producto::all();

        return view('productos.productos',["productos"=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias= Categoria::all();
       
        return view('productos.productos_create',compact('categorias'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $datos = $request->validate([
            "nombre" => ["required"],
            "precio" => ["required"],
            "direccionImagen"=> ["required"],
            'categoria_id' => ["required"],
        ], [
            "nombre.required" => "Este campo es obligatorio!",
            "precio.required" => "Este campo es obligatorio!",
            "direccionImagen.required" => "Este campo es obligatorio!"

        ]);

       
        Producto::create($datos);
        return response()->redirectTo("/productos");
        
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view("productos.producto_edit",["producto"=>$producto]);
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
