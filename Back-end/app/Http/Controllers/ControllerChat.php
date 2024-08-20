<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerChat extends Controller
{
    public function store(Request $request)
    {
        $datosValidados = $request->validate(
            [
            'nickname' => 'required|unique:chats|max:20',
            'mensaje' => 'required|max:120',
            ]
        );

        $chat = Chat::create($datosValidados);

    }

}
