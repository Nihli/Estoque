<?php namespace estoque\Http\Controllers;
//<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function lista(){
        $produtos = DB::select('select * from produto');
        return view('produto/listagem')->with('produtos',$produtos);
    }

    public function mostra(){

      $id = Request::route('id');
      $resposta = DB::select('select * from produto where id = ?', [$id]);
      if(empty($resposta)) {
        return "Esse produto não existe";
      }
      return view('produto/detalhes')->with('p', $resposta[0]);
    }
    public function novo(){
      return view('produto/formulario');
    }
    public function adiciona(){
      $nome = Request::input('nome');
      $valor = Request::input('valor');
      $quantidade = Request::input('quant');
      $descricao = Request::input('desc');

      DB::insert('insert into produto(nome,valor,quantidade,descricao) values (?,?,?,?)', array($nome, $valor,$quantidade,$descricao));

      return redirect('/produtos')->withInput(Request::only('nome'));
    }

    public function listaJson(){
      $produtos = DB::select('select * from produto');
      return response()->json($produtos);
    }
}
