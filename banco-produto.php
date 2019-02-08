<?php
function listaProdutos($conexao){
	$merc = array();
	$resultado = mysql_query("SELECT id, nome, preco, descricao FROM produtos",$conexao);
	while ($produto = mysql_fetch_assoc($resultado)) {
	array_push($merc, $produto);

	}
return $merc; 
} 

