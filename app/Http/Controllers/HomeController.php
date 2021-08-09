<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(Request $request)
    {
        // dd($request->file('picture'));
        $path = $request->picture->store('avatars');

        return $path;
    }
}

