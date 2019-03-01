<?php
require_once("conexao.php");
require_once("class/Usuario.php");

function buscaUsuario($conexao, Usuario $usuario){
	$senhaMD5 = md5($senha);
	$email = mysqli_real_escape_string($conexao,$email);
    $query = "SELECT * from usuarios where email='{$usuario->email}' and senha='{$usuario->senhaMD5}'";
	$resultado = mysqli_query($conexao,$query);
	$busca_usuario = mysqli_fetch_assoc($resultado);

	$usuario = new Usuario();
	$usuario->email = $busca_usuario['email'];
	$usuario->senha = $busca_usuario['senha'];

	return $usuario; 
}