<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index(Request $request, $id)
    {
        $name = "Donald Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        $cookie = Cookie::make('access_token', '123-XYZ', 1 , '/', $request->getHost(), false, true);

        return response()->json($data, 200)->cookie($cookie);
    }
}
