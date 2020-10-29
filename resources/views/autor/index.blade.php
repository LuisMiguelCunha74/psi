<ul>
@foreach($autores as $autor)
<li>{{$autor->nome}}</li>
@endforeach
{{$autores->render()}}
</ul>
