<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function CreateUser(Request $request)
    {
        $user = DB::select('CALL sp_add_user(?,?,?,?)', [
            $request->nombre,
            $request->apellido,
            $request->correo,
            $request->numero,
        ]);

        if (strlen($request->numero) < 10 && strlen($request->numero) > 0) {
            return response()->json([
                'res' => true,
                'msg' => "Se registró el usuario",
                'data' => $user
            ], 200);
        } else {
            return response()->json([
                'res' => false,
                'msg' => "El número de teléfono está mal escrito"
            ], 400);
        }
    }
}








 


