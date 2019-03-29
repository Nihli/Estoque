<?php

Route::get('/', function () {
    return 'Olar, beleza';
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::match(array('GET', 'POST'), '/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/json', 'ProdutoController@listaJson');
