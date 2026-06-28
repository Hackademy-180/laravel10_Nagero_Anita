<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    // HOMEPAGE PUBBLICA
    public function index()
    {
        return view('home');
    }

    // PAGINA PROFILO PROTETTA
    public function profilo()
    {
        return view('profilo');
    }
}
