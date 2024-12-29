<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ClienteControll extends Controller
{
    public function index(){
        $productos= Producto::take(4)->get();

        return view('home',["productos"=>$productos]);
        
    }
}
