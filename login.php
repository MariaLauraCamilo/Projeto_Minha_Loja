<?php include ("conexao.php");
include ("banco-usuario.php");
include("logica-usuario.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$usuario = buscaUsuario($conexao, $email, $senha);

if ($usuario == null){
	$_SESSION['danger'] = "Usuário ou senha inválido!";
	header("Location: index.php");
} else {
	logaUsuario($usuario["email"]);
	$_SESSION['success'] = "Usuário logado com sucesso!";
	header("Location: index.php");
	}
die();
