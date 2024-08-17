<?php

namespace App\Http\Controllers;

Use App\Http\Models\Grupo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerGrupo extends Controller
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nombre' => 'required|max:45',
            'admin' => 'max:20|in:usuario,admin',
            'nickname' => 'required|unique:grupos|max:20',
            'descripcion' => 'max:200',
        ])->validate();

        Grupo::create([
            'nombre' => $request['nombre'],
            'admin' => $request['admin'],
            'nickname' => $request['nickname'],
            'descrpcion' => $request['descripcion'],
        ]);
    }
}
