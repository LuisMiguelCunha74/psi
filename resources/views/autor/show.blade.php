ID:{{$autores->id_autor}}<br>
Titulo:{{$autores->nome}}<br>
Idioma:{{$autores->nacionalidade}}
@if(count($autores->livros))
@foreach($autores->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach
@else
<div class="alert alert-danger" role="alert">
Nestes autores ainda nao tenhem livros!
</div> 
@endif
