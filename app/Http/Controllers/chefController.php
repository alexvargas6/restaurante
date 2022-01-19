<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use App\chef;

class chefController extends Controller
{

    public function deleteChef($id)
    {
        try {
            $chef = chef::find($id);

            File::delete($chef->foto);

            $chef->delete();
        } catch (\Exception $e) {
            //dd($e);
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'Eliminado correctamente');
    }

    public function editChef(Request $request)
    {
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
            $chef = chef::find($request->id);
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $url = 'assets/img/chefs/';
                $filename = time() . '-' . $file->getClientOriginalName();
                //$filename = Str::camel($filename);
                //dd( $url . $filename);
                $upload = $request->file('foto')->move($url, $filename);
                $chef->foto = $url . $filename;
            }
            try {
                $chef->name = $request->name;
                $chef->puesto = $request->puesto;
                $chef->facebook = $request->facebook;
                $chef->twitter = $request->twitter;
                $chef->instagram = $request->instagram;
                $chef->linkedin = $request->linkedin;
                $chef->save();
            } catch (\Exception $e) {
                return redirect()->back()->with('ERROR', $e);
            }
            return redirect()->back()->with('success', 'Se editaron los datos de manera correcta');
        }
    }

    public function storeChef(Request $request)
    {
        $default = "assets/img/chefs/default.jpg";
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

                if ($request->hasFile('foto')) {
                    $file = $request->file('foto');
                    $url = 'assets/img/chefs/';
                    $filename = time() . '-' . $file->getClientOriginalName();
                    //$filename = Str::camel($filename);
                    $upload = $request->file('foto')->move($url, $filename);
                    $chefes->foto = $url . $filename;
                } else {
                    $chefes->foto = $default;
                }
                $chefes->name = $request->name;
                $chefes->puesto = $request->puesto;
                $chefes->facebook = $request->facebook;
                $chefes->twitter = $request->twitter;
                $chefes->instagram = $request->instagram;
                $chefes->linkedin = $request->linkedin;
                $chefes->save();
            } catch (\Exception $e) {
                return redirect()->back()->with('ERROR', $e);
            }
            return redirect()->back()->with('success', 'Se creo el registro exitosamente');
        }
    }
}
