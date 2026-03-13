<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function greet($name = 'Guest')
    {
        return view('greet', ['name' => $name]);
    }
}