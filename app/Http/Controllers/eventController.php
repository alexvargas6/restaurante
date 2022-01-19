<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\evento;

class eventController extends Controller
{

    public function editEvento(Request $request)
    {
        $rules = [
            'idEdit' => 'required|numeric',
            'tipoEdit' => 'required',
            'descripcionEdit' => 'required',
            'precioEdit' => 'required|numeric',
        ];

        $messages = [
            'tipoEdit.required' => 'ES REQUERIDO EL TIPO',
            'descripcionEdit.required' => 'ES REQUERIDA LA DESCRIPCIÓN',
            'precioEdit.required' => 'ES REQUERIDO EL PRECIO',
            'precioEdit.numeric' => 'EL PRECIO DEBE SER NÚMERICO',
            'idEdit.required' => 'ES NECESARIO EL ID',
            'idEdit.numeric' => 'ES NECESARIO EL NÚMERO'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $respuesta = "warning";
            $mensaje = "VERIFICA LOS SIGUIENTES CAMPOS: ";
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $mensaje . $errors);
        } else {
            $evento = evento::find($request->idEdit);
            try {
                if ($request->hasFile('fotoEdit')) {
                    $file = $request->file('fotoEdit');
                    $url = 'assets/img/eventos/';
                    $filename = time() . '-' . $file->getClientOriginalName();
                    $upload = $request->file('fotoEdit')->move($url, $filename);
                    $evento->foto = $url . $filename;
                }

                $evento->tipo = $request->tipoEdit;
                $evento->descripcion = $request->descripcionEdit;
                $evento->precio = $request->precioEdit;
                $evento->save();
            } catch (\Exception $e) {
                return redirect()->back()->with('ERROR', $e);
            }
            return redirect()->back()->with('success', 'Se edito el registro exitosamente');
        }
    }

    public function storeEvent(Request $request)
    {
        $default = "assets/img/chefs/default.jpg";
        $rules = [
            'tipo' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
        ];

        $messages = [
            'tipo.required' => 'ES REQUERIDO EL TIPO',
            'descripcion.required' => 'ES REQUERIDA LA DESCRIPCIÓN',
            'precio.required' => 'ES REQUERIDO EL PRECIO',
            'precio.numeric' => 'EL PRECIO DEBE SER NÚMERICO'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $respuesta = "warning";
            $mensaje = "VERIFICA LOS SIGUIENTES CAMPOS: ";
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $mensaje . $errors);
        } else {
            try {
                $evento = new evento();
                if ($request->hasFile('foto')) {
                    $file = $request->file('foto');
                    $url = 'assets/img/eventos/';
                    $filename = time() . '-' . $file->getClientOriginalName();
                    //$filename = Str::camel($filename);
                    $upload = $request->file('foto')->move($url, $filename);
                    $evento->foto = $url . $filename;
                } else {
                    $evento->foto = $default;
                }
                $evento->tipo = $request->tipo;
                $evento->descripcion = $request->descripcion;
                $evento->precio = $request->precio;
                $evento->save();
            } catch (\Exception $e) {
                return redirect()->back()->with('ERROR', $e);
            }
            return redirect()->back()->with('success', 'Se creo el registro exitosamente');
        }
    }
}
