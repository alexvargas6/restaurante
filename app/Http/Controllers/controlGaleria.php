<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeria;
use Validator;

class controlGaleria extends Controller
{
    public function subirFoto(Request $request)
    {
        $rules = [
            'name' => 'required',
            'foto' => 'required'
        ];

        $messages = [
            'name.required' => 'ES REQUERIDO EL NOMBRE',
            'foto.requierd' => 'ES REQUERIDA LA IMAGEN'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }
        try {
            $galeria = new galeria();
            $file = $request->file('foto');
            $url = 'assets/img/gallery/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $upload = $request->file('foto')->move($url, $filename);
            $galeria->foto = $url . $filename;
            $galeria->name = $request->name;
            $galeria->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'Se creo el registro exitosamente'); 
    }
}
