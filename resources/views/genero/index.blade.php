<ul>
@foreach($generos as $genero)
    <a href="{{route('genero.show', ['id'=>$genero->id_genero])}}">
    <li>{{$genero->designacao}}</li>
    </a>
@endforeach
</ul>
{{$generos->render()}}