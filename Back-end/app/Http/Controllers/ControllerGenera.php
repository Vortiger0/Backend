<?php

namespace App\Http\Controllers;

use App\Models\Genera;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerGenera extends Controller
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'idusuario' => 'required|exists:users,id',
            'idnotas' => 'required|exists:notas,id',
        ]);
    }

}

