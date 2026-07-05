<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
   
    // HOMEPAGE PUBBLICA
    public function index()
    {
        return view('home');
    }
// poteva di costruirsi un controller dedito di nome diverso come auth o profile controler; 
    // PAGINA PROFILO PROTETTA con middleware( vedi in web.php regole di Route immesse; )
    public function profilo()
    {
        return view('profilo');
    }




    
}
