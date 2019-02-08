<?php
function listaProdutos($conexao){
	$merc = array();
	$resultado = mysql_query("SELECT id, nome, preco, descricao FROM produtos",$conexao);
	while ($produto = mysql_fetch_assoc($resultado)) {
	array_push($merc, $produto);

	}
return $merc; 
} 

/*function removeProduto($conexao,$id){
	$query = "DELETE FROM produtos WHERE id = {$id}";
	return mysql_query($query,$conexao);
}*/