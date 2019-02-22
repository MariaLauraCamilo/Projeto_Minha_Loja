<?php
require_once("banco-usuario.php");
require_once("logica-usuario.php");
require_once("class/Usuario.php");

$usuario = new Usuario();

$usuario->email = isset($_POST["email"])  ? $_POST["email"]  : "";
$usuario->senha = isset($_POST["senha"])  ? $_POST["senha"]  : "";
$busca_usuario = buscaUsuario($conexao, $usuario);

if ($busca_usuario == null){
	$_SESSION['danger'] = "Usuário ou senha inválido!";
	header("Location: index.php");
} else {
	$_SESSION['success'] = "Usuário logado com sucesso!";
	logaUsuario($usuario->email);
	header("Location: index.php");
	}
die();
