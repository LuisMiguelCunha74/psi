<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genero;

class generoController extends Controller
{
    //
    
    public function index(){
        $generos = Genero::paginate(4);
        
        
        return view ('genero.index', [
           'generos'=>$generos 
        ]);
    }
    public function show(request $request){
        $id_genero = $request->id;
        $genero = Genero::where('id_genero', $id_genero)->with('livros')->first();
        return view ('genero.show', [
           'genero'=>$genero 
            ]);
    }
}
