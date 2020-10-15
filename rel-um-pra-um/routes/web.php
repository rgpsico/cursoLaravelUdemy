<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
|
*/

use App\Cliente;
use App\Endereco;

Route::get('/clientes', function () {
    $clientes = Cliente::all();
    foreach ($clientes as $c) {
    	echo "<p>ID:".$c->id."</p>";
    	echo "<p>nome:".$c->nome."</p>";
    	echo "<p>:"    .$c->telefone."</p>";
         //$e = Endereco::where('cliente_id',$c->id)->first();
	  

    	echo "<hr/>";
    }
});


Route::get('/endereco', function () {
    $endereco = Endereco::all();
    foreach ($endereco as $e) {
    	echo "<p>ID:".$e->cliente_id."</p>";
    	echo "<p>nome:".$e->cliente->nome."</p>";
    	echo "<p>:".$e->numero."</p>";
    	echo "<p>:".$e->bairro."</p>";
    	echo "<p>:".$e->cidade."</p>";
        echo "<p>:".$e->uf."</p>";
        echo "<p>:".$e->cep."</p>";



    	echo "<hr/>";
    }
});


Route::get('/inserir', function(){

$c = new Cliente();
$c->nome = "Jose de Alimeida";
$c->telefone = "252320226";
$c->save();

$e = new Endereco();
$e->rua    = "Av associao";
$e->numero =  400;
$e->bairro = "centro";
$e->cidade = "Sp";
$e->cep ="22020202";
$e->uf     = "RJ";
 
$c->endereco()->save($e);

});


Route::get('/clientes/json',function(){
$clientes = Cliente::all();	
//$clientes = Cliente::with(['endereco'])->get();
return $clientes->toJson();

});

Route::get('/endereco/json',function(){
$endereco = Endereco::all();	
$endereco = Cliente::with(['endereco'])->get();
return $endereco->toJson();

});