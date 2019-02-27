<?php
require_once("conexao.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");

//Lista dos Produtos
function listaProdutos($conexao){
	$produtos = array();
	$query = "SELECT p.id, p.nome, p.preco, p.descricao, p.usado, c.nome as categoria_nome FROM produtos as p join categorias as c on c.id = p.categoria_id";
	$resultado = mysql_query($query,$conexao);
	while ($produto_array = mysql_fetch_assoc($resultado)) {
		
		$produto = new Produto();
		$categoria = new Categoria();
		
		$produto->setId($produto_array['id']);
		$produto->setCategoria($categoria);
		$categoria->setNome($produto_array['categoria_nome']);
		
		$produto->setNome($produto_array['nome']);
 		$produto->setPreco($produto_array['preco']);
 		$produto->setDescricao($produto_array['descricao']);
 		$produto->setUsado( $produto_array['usado']);

		array_push($produtos, $produto);
	}
return $produtos; 
} 

//Função para adicionar os Produtos
 function insereProduto($conexao, Produto $produto){
 	$query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) values ('{$produto->getNome()}', {$produto->getPreco()}, '{$produto->getDescricao()}', {$produto->getCategoria()->getId()}, {$produto->getUsado()})";
	$resultado = mysql_query($query,$conexao);
	return $resultado;
}
 
 //Função para alterar algum produto
function alteraProduto($conexao, Produto $produto){
	$query = "UPDATE produtos SET nome='{$produto->getNome()}', preco= {$produto->getPreco()} , descricao= '{$produto->getDescricao()}', categoria_id= {$produto->getCategoria()->getId()}, usado= {$produto->getUsado()} WHERE id = {$produto->getId()}";
	$resultado = mysql_query($query,$conexao);
	return $resultado;
}
//Função para buscar um produto
function buscaProduto($conexao,$id){
	$query = "SELECT id, nome, preco, descricao, categoria_id, usado FROM produtos WHERE id = {$id}";
	$resultado = mysql_query($query,$conexao);
	$produto_buscado = mysql_fetch_assoc($resultado);


	$categoria = new Categoria();
    $categoria->setId($produto_buscado['categoria_id']);

	$produto = new Produto();
	$produto->setCategoria($categoria);
	$produto->setId($produto_buscado['id']);
    $produto->setNome($produto_buscado['nome']);
    $produto->setDescricao($produto_buscado['descricao']);
    $produto->setPreco($produto_buscado['preco']);
    $produto->setUsado($produto_buscado['usado']);

    return $produto;
}

//Função para remover um produto
function removeProduto($conexao,$id){
	$query = "DELETE FROM produtos WHERE id = {$id}";
	$resultado = mysql_query($query,$conexao);
	$produto_deletar = mysql_fetch_assoc($resultado);

	/*$produto = new Produto();
	$categoria = new Categoria();
    $categoria->getId($produto_deletar['categoria_id']);

	$produto->getCategoria($categoria);
	$produto->getId($produto_deletar['id']);
    $produto->getNome($produto_deletar['nome']);
    $produto->getDescricao($produto_deletar['descricao']);
    $produto->getPreco($produto_deletar['preco']);
    $produto->getUsado($produto_deletar['usado']);*/
    
	return $produto_deletar;
}