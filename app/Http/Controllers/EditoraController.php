<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\editora;

class EditoraController extends Controller
{
    //
    public function index(){
        $editoras = Editora::paginate(4);
        
        return view ('editoras.index',[
           'editoras'=>$editoras 
        ]);
    }
}
