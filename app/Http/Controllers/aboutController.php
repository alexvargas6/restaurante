<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\puntos;
use Validator;
use Illuminate\Support\Str;

class aboutController extends Controller
{
    public function addPunto(Request $request)
    {
        $rules = [
            'punto' => 'required'
        ];
        $messages = [
            'punto.required' => 'ES REQUERIDO EL NOMBRE'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $respuesta = "warning";
            $mensaje = "VERIFICA LOS SIGUIENTES CAMPOS: ";
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        } else {
            try {
                $puntos = new puntos();
                $puntos->punto = $request->punto;
                $puntos->save();
            } catch (\Exception $e) {
                return redirect()->back()->with('ERROR', $e);
            }
            return redirect()->back()->with('success', 'Se creo el registro exitosamente');
        }
    }
   

    public function deletePunto($id)
    {
        try {
            $punto = puntos::find($id);
            $punto->delete();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'Eliminado correctamente');
    }
}
