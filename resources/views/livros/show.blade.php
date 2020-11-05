ID:{{$livro->id_livro}}<br>
Titulo:{{$livro->titulo}}<br>
Idioma:{{$livro->idioma}}
@if(isset ($livro->genero->designacao))
genero:{{$livro->genero->designacao}}
@else
<div class="alert alert-danger" role="alert">
sem genero definido
</div>
@endif