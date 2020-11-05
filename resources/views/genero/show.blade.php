ID:{{$genero->id_genero}}<br>
Titulo:{{$genero->designacao}}<br>
Idioma:{{$genero->observacoes}}
@if(count($genero->livros))
@foreach($genero->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach
@else
<div class="alert alert-danger" role="alert">
Neste genero ainda nao ha livros!
</div>
@endif