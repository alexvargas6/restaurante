<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testimonio;
use Validator;

class testimonioControl extends Controller
{
    public function addTest(Request $request) 
    {
        $default = "assets/img/chefs/default.jpg";
        $rules = [
            'nombre' => 'required',
            'puesto' => 'required',
            'testimonio' => 'required'
        ];
        $messages = [
            'nombre.required' => 'ESPECIFICA EL NOMBRE',
            'puesto.required' => 'ESPECIFICA EL PUESTO',
            'testimonio.required' => 'ESPECIFICA EL TESTIMONIO'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('ERROR', $errors);
        }
        try {
            $test = new testimonio();
            $test->nombre = $request->nombre;
            $test->puesto = $request->puesto;
            $test->testimonio = $request->testimonio;

            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $url = 'assets/img/testimonials/';
                $filename = time() . '-' . $file->getClientOriginalName();
                $upload = $request->file('foto')->move($url, $filename);
                $test->foto = $url . $filename;
            } else {
                $test->foto = $default;
            }

            $test->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('ERROR', $e);
        }
        return redirect()->back()->with('success', 'Se creo el registro exitosamente');
    }
}
