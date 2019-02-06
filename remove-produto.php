<?php 

      include("cabecalho.php");
      include("conexao.php");

function removeProduto($id,$conexao){
	$query = "DELETE FROM produtos WHERE id = {$id}";
	return mysql_query($query,$conexao);
}    

var_dump($conexao);
$id = $_GET['id'];
removeProduto($id,$conexao);
header("Location: lista-produto.php");
die();
?>
