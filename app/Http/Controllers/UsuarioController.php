<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Sheets;
use App\Models\User; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function CreateUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email',
            'numero' => 'required|numeric|min:10',
        ]);
        if ($validator->fails()) {
            return redirect()->route('users.fail.form')->withErrors($validator->errors());
        }
        $spreadsheetId = '16n6n97ZwMF51XsPVnM7mFfWBsw80TRxLK51wRdYOtOw';
        $sheetName = 'Usuarios';
        $userData = [
            $request->nombre,
            $request->apellido,
            $request->correo,
            $request->numero,
        ];

        Sheets::spreadsheet($spreadsheetId)->sheet($sheetName)->append([$userData]);

        DB::select('CALL sp_add_user(?,?,?,?)', [
            $request->nombre,
            $request->apellido,
            $request->correo,
            $request->numero,
        ]);
        return redirect()->route('users.verify.form');
    }
}




 


