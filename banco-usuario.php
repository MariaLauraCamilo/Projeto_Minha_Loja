<?php
require_once("conexao.php");
require_once("class/Usuario.php");

function buscaUsuario($conexao, Usuario $usuario){
	$senhaMD5 = md5($senha);
	$email = mysql_real_escape_string($email,$conexao);
	$query = "SELECT * from usuarios where email='{$usuario->email}' and senha='{$usuario->senhaMD5}'";
	$resultado = mysql_query($query,$conexao);
	$busca_usuario = mysql_fetch_assoc($resultado);

	$usuario = new Usuario();
	$usuario->email = $busca_usuario['email'];
	$usuario->senha = $busca_usuario['senha'];

	return $usuario; 
}