<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutoresController extends Controller
{
    //
    public function index(){
        //$autores = Autor::all();
        $autores = Autor::paginate(4);
        return view('autor.index',[
            'autores'=>$autores
        ]);
    }
    public function show (request $request){
        $id_autor = $request->id;
        $autor = Autor::where('id_autor', $id_autor)->with('livros')->first();
        return view ('autor.show',[
            'autores'=>$autor
        ]);
    }
}