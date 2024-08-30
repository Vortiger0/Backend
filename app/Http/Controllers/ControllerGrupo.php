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
    }

    public function update(Request $request, $id){

        $grupo = Grupo::find($id);

        $datosValidados = $request->validate([
            'nombre' => 'required|max:45',
            'admin' => 'max:20|in:usuario,admin',
            'nickname' => 'required|unique:grupos|max:20',
            'descripcion' => 'max:200',
        ]);

        if ($grupo) {

            $grupo->update([
                'nombre' => $datosValidados['nombre'],
                'admin' => $datosValidados['admin'],
                'nickname' => $datosValidados['nickname'],
                'descripcion' => $datosValidados['descripcion'],
            ]);
        } else {
            return response()->json(['messaje' => 'Grupo no encontrado'], 404);
        }

    }

    public function destroy(Request $request, $id){
        $grupo = Grupo::find($id);

        if ($id) {
            $grupo->delete();

            return response()->json('Grupo eliminado correctamente', 204);
        }   else {
            return response()->json('No se eliminó el Grupo', 406);
         }
    }
}
