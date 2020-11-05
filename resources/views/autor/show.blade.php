ID:{{$autor->id_autor}}<br>
Titulo:{{$autor->nome}}<br>
Idioma:{{$autor->nacionalidade}}
@if(count($autor->livros))
@foreach($autor->$livros as $livro)
<h3>livro->titulo</h3>
@endforeach
@else
<div class="alert alert-danger" role="alert">
Nestes autores ainda nao tenhem livros!
</div> 
@endif
