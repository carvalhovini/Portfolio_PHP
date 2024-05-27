<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController; // Importe a classe base Controller corretamente

class HomeController extends BaseController
{
    public function index()
    {
        return view('home');
    }
}
