<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\whyus;
use Validator;

class whyUsControl extends Controller
{
    public function añadirMotivo(Request $request)
    {
        $rules = [
            'titulo' => 'required',
            'motivo' => 'required'
        ];
        $messages = [
            'titulo.required' => 'ES REQUERIDO EL TITULO',
            'motivo.required' => 'ES REQUERIDO EL TITULO'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $respuesta = "warning";
            $mensaje = "VERIFICA LOS SIGUIENTES CAMPOS: ";
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
            return $errors;
        } else {
            try {
                $why = new whyus();
                $why->titulo = $request->titulo;
                $why->motivo = $request->motivo;
                $why->save();
                return redirect()->back()->with('success', 'El motivo se ha guardado correctamente');
            } catch (\Exception $e) {
                return redirect()->back()->with('ERROR', $e);
            }
        }
    }

    public function delete($id)
    {
        try {
            $motivo = whyus::find($id);
            $motivo->delete();
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'El motivo se elimino correctamente');
    }
}
