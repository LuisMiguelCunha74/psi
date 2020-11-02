<ul>
@foreach($livros as $livro)
<a href="{{route('livros.show', ['id'=>$livro->idl])}}">
    <li>{{$livro->titulo}}</li></a>
@endforeach


</ul>
{{$livros->render()}}