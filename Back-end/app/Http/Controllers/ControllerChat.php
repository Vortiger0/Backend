<?php

namespace App\Http\Controllers;

use App\Http\Models\Chat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerChat extends Controller
{
    public function chat(Request $request)
    {
        Validator::make($request->all(), [
            'nickname' => 'required|unique:chats|max:20',
            'mensaje' => 'required|max:120',
        ])->validate();
    }

}
