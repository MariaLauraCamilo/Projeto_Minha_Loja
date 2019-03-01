<?php
require_once("conexao.php");
require_once("class/Categoria.php");
require_once("class/Produto.php");

function listaCategorias($conexao){
	$categorias = array();
	$resultado = mysqli_query($conexao, "SELECT id, nome FROM categorias");
	while ($categoria_array = mysqli_fetch_assoc($resultado)) {

		$produto = new Produto();
        $categoria = new Categoria();

		$produto->setCategoria($categoria);
	    $categoria->setId($categoria_array['id']);
	    $categoria->setNome($categoria_array['nome']);

		array_push($categorias, $categoria); 
	}
	return $categorias;
}