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
    public function index2()
    {
        //$productos= DB::select("SELECT * FROM productos");
        $productos= Producto::all();
        $categorias= Categoria::all();
        return view('productos.productos_lista_editar',["productos"=>$productos],["categorias"=>$categorias]);
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
        return response()->redirectTo("/productos_listado");
        
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
        $categorias= Categoria::all();
        return view("productos.producto_edit",["producto"=>$producto],compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Producto $producto, Request $request)
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

        $producto->nombre= $datos["nombre"];
        $producto->precio= $datos["precio"];
        $producto->direccionImagen= $datos["direccionImagen"];
        $producto->categoria_id= $datos["categoria_id"];


        $producto->save();
        return redirect("/productos_listado")->with("success", "Se actualizo el producto de forma correcta");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $respuesta = $producto->delete();

        if($respuesta){
            return redirect("/productos_listado")->with("success", "Se elimino el producto correctamente");
        }
        else{
            return redirect("/productos_listado")->with("fail", "No se pudo eliminar");
        }
    }
}
