<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerNota extends Controller
{
    public function store(Request $request)
    {
        $datosvalidados = $request->validate([
            'descripcion' => 'max:300',
            'categoria' => 'required|max:45',
            'prioridad' => 'required|in:baja,media,alta',
            'asignacion' => 'required|boolean',
        ]);

        $nota = Nota::create($datosvalidados);

    }
}
