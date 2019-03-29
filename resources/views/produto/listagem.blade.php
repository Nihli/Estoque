@extends('layout.principal')

@section('conteudo')

@if(empty($produtos))
  <div>Você não tem nenhum produto cadastrado.</div>

@else

  <h1>Listagem de produtos com Laravel</h1>
  </br>
  <table class="table table-striped table-bordered table-hover">
    @foreach($produtos as $p)
    <tr class="{{ $p->quantidade<=1 ? 'danger' : ''}}">
      <td>{{$p->nome}}</td>
      <td>{{$p->descricao}}</td>
      <td>{{$p->valor}}</td>
      <td>{{$p->quantidade}}</td>
      <td><a href="/produtos/mostra/{{$p->id}}">Visualisar</a>
      </td>
    </tr>
    @endforeach
  </table>
@endif

@if(old('nome'))
  <div class="alert alert-success">
    <strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado.
  </div>
@endif

@stop
