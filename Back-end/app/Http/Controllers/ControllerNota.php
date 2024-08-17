<?php

namespace App\Http\Controllers;

use App\Http\Models\Nota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerNota extends Controller
{
    public function nota(Request $request)
    {
        Validator::make($request->all(), [
            'descripcion' => 'max:300',
            'categoria' => 'required|max:45',
            'prioridad' => 'required',
            'asignacion' => 'required',
        ])->validate();
    }
}
