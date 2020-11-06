<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    
    protected $primaryKey='id_livro';
    
    protected $table='livros';
    
    public function genero(){
        return $this->belongsTo('App\Models\Genero', 'id_genero');
    }
    
    public function autores(){
        return $this->belongsToMany(
            'App\Models\autor',
            'autores_livros',//nome da tabela pivot
            'id_livro',//fk de autores livros que relaciona com livro
            'id_autor'//fk de autores livros que relaciona com autor
        )->withTimestamps();
    }
}
