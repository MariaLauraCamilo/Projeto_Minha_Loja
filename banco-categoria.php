<?php
include ("conexao.php");

function listaCategorias($conexao){	
	$categorias = array();
	$query = "SELECT id, nome FROM categorias";
	$resultado = mysql_query($query,$conexao);
	while ($categoria = mysql_fetch_assoc($resultado)) {
	array_push($categorias, $categoria); 
}
return $categorias;
}

