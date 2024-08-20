<?php

namespace App\Http\Controllers;

use App\Models\UserGrupo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerUserGrupo extends Controller
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'idusuario' => 'required|exists:users,id',
            'idgrupos' => 'required|exists:grupos,id',
        ]);
    }
}
