<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;
    
    protected $primaryKey = "id_autor";
    
    protected $table = "autores";
    
    public function livros(){
        return $this->hasMany('App\Models\livro', 'id_autor');
    }
        
}
