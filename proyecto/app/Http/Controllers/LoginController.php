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
            return response()->redirectTo("/productos")->with("success", "Se ingreso correctamente");;
        }
        else{
            //fallo!
            return response()->redirectTo("/home")->with("fail", "Usuario y/o contraseña incorrecta");
        }
    }

    public function register(Request $request){
        $datos = $request->validate([
                "username" => ['required', 'min:5', 'max:20','alpha_num','unique:usuarios,username'],
                "password" => ['required', 'confirmed','min:5',]
            ],
            [
                "username.required" => "Este campo es obligatorio",
                "username.unique" => "El nombre de usuario ya está en uso.",
                "username.min" =>"El nombre de usuario debe tener al menos 5 caracteres.",
                "username.max" => "El nombre de usuario no puede superar los 20 caracteres.",
                "password.required" => "La contraseña es obligatoria.",
                "password.confirmed" => "Las contraseñas no coinciden.",
                "password.min" => "La contraseña debe tener al menos 5 caracteres."
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
