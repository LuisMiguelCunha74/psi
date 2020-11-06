<ul>
@foreach($editoras as $editora)
<a href="{{route('editora.show', ['id'=>$editora->id_editora])}}">
    <li>{{$editora->nome}}</li>
</a>
@endforeach
</ul>
{{$editoras->render()}}