<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;
    
    protected $primaryKey = "id_autor";
    
    protected $table = "autores";
    
    //public function livros(){
   //  return $this->hasMany('App\Models\Livro', 'id_autor');
  //}
    
    
    public function livros(){
        return $this->belongsToMany(
            'App\Models\livro',
            'autores_livros',
            'id_livro',
            'id_autor'
        )->withTimestamps();
    }    
}
