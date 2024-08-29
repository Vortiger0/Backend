<?php

namespace App\Http\Controllers;

use App\Models\GrupoChat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerGrupoChat extends Controller
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'idgrupos' => 'required|exists:grupos,id',
            'idchats' => 'required|exists:chats,id',
        ]);
    }
}
