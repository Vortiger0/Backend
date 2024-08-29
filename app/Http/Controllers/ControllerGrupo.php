<?php

namespace App\Http\Controllers;

Use App\Models\Grupo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerGrupo extends Controller
{
    public function store(Request $request)
    {
        $datosValidados = $request->validate([
            'nombre' => 'required|max:45',
            'admin' => 'max:20|in:usuario,admin',
            'nickname' => 'required|unique:grupos|max:20',
            'descripcion' => 'max:200',
        ]);

        $grupo = Grupo::create($datosValidados);


       /* Grupo::find($id);

        if ($grupo) {
            $grupo->update([
                'nombre' => $request['nombre'],
                'admin' => $request['admin'],
                'nickname' => $request['nickname'],
                'descripcion' => $request['descripcion'],
            ]);
        } else {
            return response()->json(['messaje' => 'Grupo no encontrado'], 404);
        }
        */

    }
}
