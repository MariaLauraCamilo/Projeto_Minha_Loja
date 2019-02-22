<?php
require_once("conexao.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");


function listaProdutos($conexao){
	$merc = array();
	$query = "SELECT p.id, p.nome, p.preco, p.descricao, p.usado, c.nome as categoria_nome FROM produtos as p join categorias as c on c.id = p.categoria_id";
	$resultado = mysql_query($query,$conexao);
	while ($produto_array = mysql_fetch_assoc($resultado)) {
		
		$produto = new Produto();
		$categoria = new Categoria();
		$categoria->nome = $produto_array['categoria_nome'];
		$produto->id = $produto_array['id'];
		$produto->nome = $produto_array['nome'];
 		$produto->preco = $produto_array['preco'];
 		$produto->descricao = $produto_array['descricao'];
 		$produto->categoria = $categoria;
 		$produto->usado = $produto_array['usado'];

		array_push($merc, $produto);
	}
return $merc; 
} 

 function insereProduto($conexao, Produto $produto){
 	$query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) values ('{$produto->nome}', {$produto->preco}, '{$produto->descricao}', {$produto->categoria->id}, {$produto->usado})";
	$resultado = mysql_query($query,$conexao);
	return $resultado;
}
 
function alteraProduto($conexao, Produto $produto){
	$query = "UPDATE produtos SET nome='{$produto->nome}', preco= {$produto->preco} , descricao= '{$produto->descricao}', categoria_id= {$produto->categoria->id}, usado= {$produto->usado} WHERE id = {$produto->id}";
	$resultado = mysql_query($query,$conexao);
	return $resultado;
}

function buscaProduto($conexao,$id){
	$query = "SELECT id, nome, preco, descricao, categoria_id, usado FROM produtos WHERE id = {$id}";
	$resultado = mysql_query($query,$conexao);
	$produto_buscado = mysql_fetch_assoc($resultado);
	$produto = new Produto();
	$categoria = new Categoria();
    $categoria->id = $produto_buscado['categoria_id'];

	$produto->categoria = $categoria;
	$produto->id = $produto_buscado['id'];
    $produto->nome = $produto_buscado['nome'];
    $produto->descricao = $produto_buscado['descricao'];
    $produto->preco = $produto_buscado['preco'];
    $produto->usado = $produto_buscado['usado'];
    return $produto;
}

function removeProduto($conexao,$id){
	$query = "DELETE FROM produtos WHERE id = {$id}";
	$resultado = mysql_query($query,$conexao);
	$produto_deletar = mysql_fetch_assoc($resultado);

	$produto = new Produto();
	$categoria = new Categoria();
    $categoria->id = $produto_deletar['categoria_id'];

	$produto->categoria = $categoria;
	$produto->id = $produto_deletar['id'];
    $produto->nome = $produto_deletar['nome'];
    $produto->descricao = $produto_deletar['descricao'];
    $produto->preco = $produto_deletar['preco'];
    $produto->usado = $produto_deletar['usado'];
    
	return $produto;
}