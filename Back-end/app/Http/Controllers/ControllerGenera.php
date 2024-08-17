<?php

namespace App\Http\Controllers;

use App\Http\Models\Genera;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerGenera extends Controller
{
    public function genera(Request $request)
    {
        Validator::make($request->all(), [

        ])->validate();
    }

}

