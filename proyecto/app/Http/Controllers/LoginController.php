<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{

    public function index()
    {
        return view('registro');
    }

    public function login(Request $request){
        $datos = $request->validate([
            "loginusername" => ['required'],
            "loginpassword" => ['required']
        ]);

        if(auth()->attempt(["username" => $datos["loginusername"], "password" => $datos["loginpassword"]])){
            //exito!
            return response()->redirectTo("/productos");
        }
        else{
            //fallo!
            return response()->redirectTo("/home")->with("fail", "Hubo un error al acreditarse!");
        }
    }

    public function register(Request $request){
        $datos = $request->validate([
                "username" => ['required', 'min:3', 'max:8'],
                "password" => ['required', 'confirmed']
            ],
            [
                "username.required" => "Este campo es obligatorio",
                "username.min" => "Este campo necesita un minimo de 3 caracteres",
                "username.max" => "Este campo no puede pasar de tantos caracteres",
                "password.required" => "Este campo es obligatorio",
                "password.confirmed" => "Las contraseñas no coinciden"
            ]
        );

        $datos["password"] = bcrypt($datos["password"]);

        User::create($datos);

        return response()->redirectTo("/home")->with("success", "Se registro con exito!");

    }

    public function logout(){
        auth()->logout();
        return response()->redirectTo("/home");
    }
}
