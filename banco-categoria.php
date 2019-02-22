<?php
require_once("conexao.php");
require_once("class/Categoria.php");
require_once("class/Produto.php");


function listaCategorias($conexao){	
	$categorias = array();
	$query = "SELECT id, nome FROM categorias";
	$resultado = mysql_query($query,$conexao);
	while ($categoria_array = mysql_fetch_assoc($resultado)) {

		$produto = new Produto();
		$categoria = new Categoria();
		$produto->categoria = $categoria;

	    $categoria->id = $categoria_array['id'];
	    $categoria->nome = $categoria_array['nome'];

		array_push($categorias, $categoria); 
	}
	return $categorias;
}