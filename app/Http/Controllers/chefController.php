<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use App\chef;

class chefController extends Controller
{
    public function storeChef(Request $request)
    {
        $default = "";
        $rules = [
            'name' => 'required',
            'puesto' => 'required'
        ];

        $messages = [
            'name.required' => 'ES REQUERIDO EL NOMBRE',
            'puesto.requierd' => 'ES REQUERIDO EL PUESTO'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $respuesta = "warning";
            $mensaje = "VERIFICA LOS SIGUIENTES CAMPOS: ";
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        } else {
            try {
                $chefes = new chef();
                $chefes->name = $request->name;
                $chefes->puesto = $request->puesto;
                $chefes->facebook = $request->facebook;
                $chefes->twitter = $request->twitter;
                $chefes->instagram = $request->instagram;
                $chefes->linkedin = $request->linkedin;

                if ($request->hasFile('foto')) {
                    $file = $request->file('foto');
                    $url = 'assets/img/chefs/';
                    $filename = time() . '-' . $file->getClientOriginalName();
                    $filename = Str::camel($filename);
                    $upload = $request->file('foto')->move($url, $filename);
                    $chefes->fondo = $url . $filename;
                } else {
                    $chefes->fondo = $default;
                }

                $chefes->save();
            } catch (\Exception $e) {
                return redirect()->back()->with('ERROR', $e);
            }
            return redirect()->back()->with('success', 'Se creo el registro exitosamente');
        }
    }
}
