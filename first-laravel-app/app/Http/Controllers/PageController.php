<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function helloWorld()
    {
        return view('hello-world');
    }

    public function emailSubmitted(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        return view('hello-world');
    }

    public function goodbyeWorld()
    {
        return view('goodbye-world');
    }
}
