<?php

namespace App\Http\Controllers;

use App\Http\Models\Nota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerNota extends Controller
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'descripcion' => 'max:300',
            'categoria' => 'required|max:45',
            'prioridad' => 'required|in:baja,media,alta',
            'asignacion' => 'required|boolean',
        ])->validate();

        Nota::create([
            'descripcion' => $request['descripcion'],
            'categoria' => $request['categoria'],
            'prioridad' => $request['prioridad'],
            'asignacion' => $request['asignacion'],
        ]);
    }
}
