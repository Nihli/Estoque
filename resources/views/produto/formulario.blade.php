@extends('layout.principal')

@section('conteudo')
<h1>Adicionar produtos</h1>
<form action="/produtos/adiciona" method="post">

  <input type="hidden" name="_token" value=" {{ csrf_token()}}" />

  <div class="form-group">
    <label>Nome</label>
    <input name="nome" class="form-control" />
  </div>
  <div class="form-group">
    <label>Valor</label>
    <input name="valor" class="form-control" />
  </div>
  <div class="form-group">
    <label>Quantidade</label>
    <input name="quant" class="form-control" />
  </div>
  <div class="form-group">
    <label>Descrição</label>
    <input name="desc" class="form-control" />
  </div>
  <button type="submit" class="btn btn-success " >Adicionar</button>
</form>
@stop
