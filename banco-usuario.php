<?php
function buscaUsuario($conexao, $email, $senha){
	$senhaMD5 = md5($senha);
	$query = "SELECT * from usuarios where email='{$email}' and senha='{$senhaMD5}'";
	$resultado = mysql_query($query,$conexao);
	$usuario = mysql_fetch_assoc($resultado);
	return $usuario; 
}