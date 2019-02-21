<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("PHPMailerAutoload.php");

//Criando um mailer para enviar o que quer 
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
//Protocolo de Segurança
$mail->SMTPSecure = 'tls';
//Autenticação
$mail->SMTPAuth = true;
$mail->Username = "maria.laura@ftdata.com.br";
$mail->Password = "5b59b7ad";

$mail->setFrom("maria.laura@ftdata.com.br", "Minha Loja");
$mail->addAddress("maria.laura@ftdata.com.br");
$mail->Subject = "Email de Contato da loja";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";
$mail->SMTPDebug = 2;

if($mail->send()){
	$_SESSION["success"] = "Mensagem enviada com sucesso!";
	header("Location: index.php");

} else {
	$_SESSION["danger"] = "Erro ao enviar mensagem!" . $mail->ErrorInfo;
	header("Location: contato.php");
}

die();