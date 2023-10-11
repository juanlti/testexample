<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index():JsonResponse{

        $usuarios=User::all();
        //obtengo todos los usuarios


        return response()->json($usuarios);
        //retorno los usuarios en formato tipo json (api)

    }
    public function detail($id):JsonResponse{
        //obtengo el objeto con el usuario id=1;
        $usuario=User::find($id);
        if($usuario===null){
            //usuario no encontrado
            abort(404);

        }
        return response()->json($usuario);


    }
}
