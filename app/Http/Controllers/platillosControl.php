<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use App\platillos;
use App\menu;

class platillosControl extends Controller
{
    public function agregarCat(Request $request)
    {
        $respuesta = "";
        $mensaje = "";
        $errors = [];
        $rules = [
            'name' => 'required'
        ];
        $messages = [
            'name.required' => 'ESPECIFICA EL NOMBRE'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $respuesta = "warning";
            $mensaje = "VERIFICA LOS SIGUIENTES CAMPOS: ";
            $errors = $validator->errors();
            return $errors;
        } else {
            try {
                platillos::create([
                    'platillos' => $request->name,
                ]);
                $respuesta = "success";
                $mensaje = "TODO BIEN";
            } catch (\Exception $e) {
                $respuesta = "danger";
                $mensaje = "OCURRIO UN ERROR FATAL";
                $errors[0] = $e;
                return $e;
            }
        }

        return redirect('menu');
    }

    public function addAlimento(Request $request)
    {
        $respuesta = "";
        $mensaje = "";
        $errors = [];
        $rules = [
            'nombre' => 'required|string',
            'precio' => 'required|numeric',
            'ingredientes' => 'required',
            'tipo' => 'required|numeric',
            'foto' => 'required'
        ];
        $messages = [
            'nombre.required' => 'ESPECIFICA EL NOMBRE',
            'precio.required' => 'ES NECESARIO EL PRECIO',
            'precio.numeric' => 'EL PRECIO DEBE SER NÚMERICO',
            'ingredientes.required' => 'SE NECESITA UNA DESCRIPCIÓN',
            'tipo.required' => 'SE NECESITA UNA CATEGORIA',
            'foto.required' => 'SE NECESITA UNA IMAGEN DEL PLATILLO'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $respuesta = "warning";
            $mensaje = "VERIFICA LOS SIGUIENTES CAMPOS: ";
            $errors = $validator->errors();
            return redirect('menu');
        } else {
            try {
                $comida = new menu();
                if ($request->hasFile('foto')) {
                    $file = $request->file('foto');
                    $url = 'assets/img/comida/';
                    $filename = time() . '-' . $file->getClientOriginalName();
                    $filename = Str::camel($filename);
                    $upload = $request->file('foto')->move($url, $filename);
                    $comida->foto = $url . $filename;
                } else {
                    dd('Request Has No File');
                }
                $comida->nombre = $request->nombre;
                $comida->precio = $request->precio;
                $comida->ingredientes = $request->ingredientes;
                $comida->tipo = $request->tipo;
                $comida->foto = $request->foto;
                $comida->save();
            } catch (\Exception $e) {
                dd($e);
            }
            return redirect('menu');
        }
    }
}
