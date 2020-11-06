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
        
        public function show (request $request){
        $id_editora = $request->id;
        $editora = Editora::where('id_editora', $id_editora)->with('livros')->first();
        return view ('editoras.show',[
            'editoras'=>$editora
            ]);
    }
}
