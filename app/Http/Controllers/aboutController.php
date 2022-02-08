<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\puntos;
use Validator;
use App\about;
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

    public function aboutEdit(Request $request)
    {
        $rules = [
            'id' => 'required',
            'titulo' => 'required',
            'Sub_titulo' => 'required',
            'descripcion' => 'required'
        ];
        $messages = [
            'descripcion.required' => 'ES REQUERIDA LA DESCRIPCIÓN',
            'Sub_titulo.required' => 'ES REQUERIDO EL SUBTITULO',
            'titulo.required' => 'ES REQUERIDO EL TITULO'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $respuesta = "warning";
            $mensaje = "VERIFICA LOS SIGUIENTES CAMPOS: ";
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        } else {
            $about = about::find($request->id);
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $url = 'assets/img/about/';
                $filename = time() . '-' . $file->getClientOriginalName();
                $upload = $request->file('foto')->move($url, $filename);
                $about->foto = $url . $filename;
            }
            $about->titulo = $request->titulo;
            $about->Sub_titulo = $request->Sub_titulo;
            $about->descripcion = $request->descripcion;
            $about->save();
        }
        return redirect()->back()->with('success', 'Datos editados correctamente');
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
