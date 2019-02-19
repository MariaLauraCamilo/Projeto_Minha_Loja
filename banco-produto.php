<?php
function listaProdutos($conexao){
	$merc = array();
	$query = "SELECT p.id, p.nome, p.preco, p.descricao, p.usado, c.nome as categoria_nome FROM produtos as p join categorias as c on c.id = p.categoria_id";
	$resultado = mysql_query($query,$conexao);
	while ($produto = mysql_fetch_assoc($resultado)) {
	array_push($merc, $produto);

	}
return $merc; 
} 

 function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
 	$query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
	$resultado = mysql_query($query,$conexao);
	return $resultado;
}
 
function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado){
	$query = "UPDATE produtos SET nome='{$nome}', preco= {$preco} , descricao= '{$descricao}', categoria_id= {$categoria_id}, usado= {$usado} WHERE id = {$id}";
	$resultado = mysql_query($query,$conexao);
	
	return $resultado;
}

function buscaProduto($conexao,$id){
	$query = "SELECT id, nome, preco, descricao, categoria_id, usado FROM produtos WHERE id = {$id}";
	$resultado = mysql_query($query,$conexao);
	return mysql_fetch_assoc($resultado);
}

function removeProduto($conexao,$id){
	$query = "DELETE FROM produtos WHERE id = {$id}";
	$resultado = mysql_query($query,$conexao);
	return $resultado;
}