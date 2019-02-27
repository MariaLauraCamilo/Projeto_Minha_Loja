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
		$produto->setCategoria($categoria);
		
	    $categoria->setId($categoria_array['id']);
	    $categoria->setNome($categoria_array['nome']);

		array_push($categorias, $categoria); 
	}
	return $categorias;
}