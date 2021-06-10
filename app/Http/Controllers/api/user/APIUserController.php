<?php

namespace App\Http\Controllers\api\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APIUserController extends Controller
{
    public function test(){
        return response()->json("helo connection is here", 200, [], JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
    }
}
