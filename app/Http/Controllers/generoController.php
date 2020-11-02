<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genero;

class generoController extends Controller
{
    //
    
    public function index(){
        $generos = Genero::paginate(4);
        return view ('generos.index', [
           'generos'=>$generos 
        ]);
    }
}
