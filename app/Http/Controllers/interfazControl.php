<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\contacto;
use Validator;

class interfazControl extends Controller
{
    public function validarContactos()
    {
        $orders = contacto::all();

        if ($orders->isEmpty()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateAll(Request $request)
    {

        $rules = [
            'ultimo_dia' => 'required',
            'primer_dia' => 'required',
            'direccion' => 'required',
            'email' => 'required|email',
            'telefono' => 'required|numeric',
            'apertura' => 'required',
            'cierre' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required'

        ];

        $messages = [
            'telefono.required' => 'ES REQUERIDA UN NÚMERO DE TELEFONO',
            'telefono.numeric' => 'EL NUMERO TIENE QUE SER NÚMERICO',
            'ultimo_dia.required' => 'PON EL ÚLTIMO DÍA',
            'primer_dia.required' => 'PON EL PRIMER DÍA',
            'direccion.required' => 'PON LA DIRECCIÓN DEL ESTABLECIMIENTO',
            'email.required' => 'SE REQUIERE UN EMAIL',
            'email.email' => 'ESTE NO PARECE UN EMAIL',
            'apertura.required' => 'A QUE HORA ABRES?',
            'cierre.required' => 'A QUE HORAS CIERRAS?',
            'nombre.required' => 'Es requerido el nombre de la empresa',
            'descripcion.required' => 'Es requerida una descripción'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $respuesta = "warning";
            $mensaje = "VERIFICA LOS SIGUIENTES CAMPOS: ";
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        } else {
            try {
                if ($this->validarContactos()) {
                    $contac = new contacto();
                    $contac->direccion = $request->direccion;
                    $contac->telefono = $request->telefono;
                    $contac->email = $request->email;
                    $contac->primer_dia = $request->primer_dia;
                    $contac->ultimo_dia = $request->ultimo_dia;
                    $contac->apertura = $request->apertura;
                    $contac->cierra = $request->cierre;
                    $contac->nombre = $request->nombre;
                    $contac->descripcion = $request->descripcion;

                    /*if ($request->hasFile('fondo')) {
                        $file = $request->file('fondo');
                        $url = 'fondo/';
                        $filename = time() . '-' . $file->getClientOriginalName();
                        $filename = Str::camel($filename);
                        $upload = $request->file('fondo')->move($url, $filename);
                        $contac->fondo = $url . $filename;
                    }*/

                    $contac->save();
                    return redirect()->back()->with('success', 'Se creo la información correctamente');
                } else {
                    $upda = DB::table('contactos')->first();
                    $contac = contacto::find($upda->id);
                    $contac->direccion = $request->direccion;
                    $contac->telefono = $request->telefono;
                    $contac->email = $request->email;
                    $contac->primer_dia = $request->primer_dia;
                    $contac->ultimo_dia = $request->ultimo_dia;
                    $contac->apertura = $request->apertura;
                    $contac->cierra = $request->cierre;
                    $contac->nombre = $request->nombre;
                    $contac->descripcion = $request->descripcion;

                    /*if ($request->hasFile('fondo')) {
                        $file = $request->file('fondo');
                        $url = 'assets/img/fondo/';
                        $filename = time() . '-' . $file->getClientOriginalName();
                        $filename = Str::camel($filename);
                        $upload = $request->file('fondo')->move($url, $filename);
                        $contac->fondo = $url . $filename;
                    }*/

                    $contac->save();

                    return redirect()->back()->with('success', 'los cambios se guardaron bien');
                }
            } catch (\Exception $e) {
                return redirect()->back()->with('ERROR', $e);
            }
        }
    }
}
