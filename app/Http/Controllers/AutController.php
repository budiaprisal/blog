<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function welcomepage()
    {
        return view('welcome');
    }
}
