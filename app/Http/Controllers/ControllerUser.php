<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    public function store(Request $request)
    {
        $datosValidados = $request->validate(
            [
                'name' => 'required|max:30',
                'nickname' => 'required|unique:users|max:20',
                'email' => 'required|unique:users|max:45',
                'password' => 'required|max:40',
            ]
        );

        User::create([
            'name' => $datosValidados['name'],
            'nickname' => $datosValidados['nickname'],
            'email' => $datosValidados['email'],
            'password' => bcrypt($datosValidados['password']),
        ]);

        return response()->json("Usuario creado", 200);
    }
}
