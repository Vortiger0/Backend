<?php

namespace App\Http\Controllers;

Use App\Http\Models\Grupo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerGrupo extends Controller
{
    public function grupo(Request $request)
    {
        Validator::make($request->all(), [
            'nombre' => 'required|max:45',
            'admin' => 'max:20',
            'nickname' => 'required|unique:grupos|max:20',
            'descripcion' => 'max:200',
        ])->validate();
    }
}
