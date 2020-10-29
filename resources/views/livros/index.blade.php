<ul>
@foreach($livros as $livro)
<li>{{$livro->titulo}}</li>
@endforeach
{{$livros->render()}}
</ul>
