<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class editora extends Model
{
    use HasFactory;
    
    protected $primaryKey = "id_editora";
    
    protected $table = "editoras";
    
    public function livros_1(){
    return $this->belongsTo('App\Models\Livro', 'id_livros');
    }
    
    public function livros(){
        return $this->belongToMany(
            'App\Models\livro',
            'autores_livros',
            'id_livros',
            'id_editora'
        )->withTimestamps();
    }
}