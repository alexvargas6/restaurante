<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use App\platillos;
use App\menu;
use App\especiales;

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
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        } else {
            try {
                platillos::create([
                    'platillos' => $request->name,
                ]);
            } catch (\Exception $e) {
                $errors[0] = $e;
                return redirect()->back()->with('ERROR', $errors[0]);
            }
        }

        return redirect()->back()->with('success', 'Se creo la categoria exitosamente');
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
            return redirect()->back()->with('ERROR', $errors);
        } else {
            try {
                $comida = new menu();
                if ($request->hasFile('foto')) {
                    $file = $request->file('foto');
                    $url = 'assets/img/menu/';
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
                $comida->save();
            } catch (\Exception $e) {
                return redirect()->back()->with('ERROR', $e);
            }
            return redirect()->back()->with('success', 'Se creo el platillo exitosamente');
        }
    }
    public function delete(Request $request, $id)
    {
        try {
            $comida = menu::find($id);

            File::delete($comida->foto);

            $comida->delete();
        } catch (\Exception $e) {

            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'Se elimino el platillo correctamente');
    }

    public function especiales(Request $request)
    {
        $rules = [
            'id' => 'required'
        ];
        $messages = [
            'id.required' => 'ESPECIFICA EL NOMBRE'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $respuesta = "warning";
            $mensaje = "VERIFICA LOS SIGUIENTES CAMPOS: ";
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }
        $comida = menu::find($request->id);
        $esp = new especiales();
        try {
            $esp->name = $comida->nombre;
            $esp->subtitulo = $comida->precio;
            $esp->descripcion = $comida->ingredientes;
            $esp->foto = $comida->foto;
            $esp->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
            // return redirect()->route('menu');
        }
        return redirect()->back()->with('success', 'Se añadio el especial correctamente');
    }
}
