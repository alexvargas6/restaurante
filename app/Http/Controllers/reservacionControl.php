<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservaciones;
use Validator;


class reservacionControl extends Controller
{
    public function ejecutar(Request $request)
    {
        $rules = [
            'id' => 'required'
        ];

        $messages = [
            'id.required' => 'ES REQUERIDO UN ID'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }
        try {
            $reservacion = reservaciones::find($request->id);
            $reservacion->visto = 1;
            $reservacion->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'El cliente esta informado');
    }

    public function addReservacion(Request $request)
    {
        $rules = [
            'nombre' => 'required',
            'telefono' => 'required|numeric',
            'personas' => 'required',
            'hora' => 'required',
            'fecha' => 'required'
        ];
        $messages = [
            'nombre.required' => 'ESPECIFICA EL NOMBRE',
            'telefono.required' => 'SE REQUIERE UN NUMERO DE TELEFONO',
            'personas.required' => 'ES NECESARIO EL NUMERO DE PERSONAS',
            'hora.required' => 'ES NECESARIA LA HORA',
            'fecha.required' => 'ES NECESARIA LA FECHA'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $errors;
        }
        try {
            $reservacion = new reservaciones();
            $reservacion->nombre = $request->nombre;
            $reservacion->email = $request->email;
            $reservacion->mensaje = $request->mensaje;
            $reservacion->telefono = $request->telefono;
            $reservacion->personas = $request->personas;
            $reservacion->hora = $request->hora;
            $reservacion->fecha = $request->fecha;
            $reservacion->visto = 0;
            $reservacion->save();
        } catch (\Exception $e) {
            return 'error';
        }
        if ($request->retorno == 1) {
            return redirect()->back()->with('success', 'Reservación registrada correctamente');
        }
        return  'Reservación registrada correctamente';
    }
}
