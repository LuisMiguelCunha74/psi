<ul>
@foreach($autores as $autor)
<a href="{{route('autor.show', ['id'=>$autor->id_autor])}}">
    <li>{{$autor->nome}}</li>
</a>
@endforeach
{{$autores->render()}}
</ul>
