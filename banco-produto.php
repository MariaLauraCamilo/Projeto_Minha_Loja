<?php
function listaProdutos($conexao){
	$merc = array();
	$query = "SELECT p.id, p.nome, p.preco, p.descricao, c.nome as categoria_nome FROM produtos as p join categorias as c on c.id = p.categoria_id";
	$resultado = mysql_query($query,$conexao);
	while ($produto = mysql_fetch_assoc($resultado)) {
	array_push($merc, $produto);

	}
return $merc; 
} 

