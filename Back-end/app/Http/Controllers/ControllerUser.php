<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|max:30',
            'nickname' => 'required|unique:users|max:20',
            'email' => 'required|unique:users|max:45',
            'password' => 'required|max:40',
        ])->validate();

        User::create([
            'name' => $request['name'],
            'nickname' => $request['nickname'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
    }
}
