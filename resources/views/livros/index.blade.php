<ul>
@foreach($livros as $livro)
<a href="{{route('livros.show', ['id'=>$livro->id_livro])}}">
    <li>{{$livro->titulo}}</li></a>
@endforeach


</ul>
{{$livros->render()}}