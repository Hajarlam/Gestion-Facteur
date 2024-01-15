<?php


// HomeController.php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard'); // Assurez-vous que votre vue est dans resources/views/dashboard/index.blade.php
    }
}

