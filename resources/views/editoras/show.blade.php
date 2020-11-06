ID:{{$editoras->id_editora}}<br>
Titulo:{{$editoras->nome}}<br>
Idioma:{{$editoras->morada}}
@if(count($editoras->livros))
@foreach($editoras->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach
@else
<div class="alert alert-danger" role="alert">
Neste genero ainda nao ha livros!
</div>
@endif
