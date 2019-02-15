<?php include ("conexao.php");
include ("banco-usuario.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$usuario = buscaUsuario($conexao, $email, $senha);

if ($usuario == null){
	header("Location: index.php?login=0");
} else {
	setcookie("usuario_logado", $usuario["email"], time()+15);
	header("Location: index.php?login=1");
	}
die();
