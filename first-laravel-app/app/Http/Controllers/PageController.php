<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function goodbyeWorld()
    {
        return view('goodbye-world');
    }
}
