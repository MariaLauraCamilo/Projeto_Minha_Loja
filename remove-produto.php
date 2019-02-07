<?php
      include("cabecalho.php");
      include("conexao.php");

$id = $_GET['id'];
removeProduto($conexao,$id);
header("Location: lista-produto.php");
die();

function removeProduto ($conexao,$id){

	$query = "DELETE FROM produtos WHERE id = {$id}";
	$resultado = mysql_query($query,$conexao);
	return $resultado;
}    
 if ($resultado){ 
	?>
		<p class="text-success">Produto removido com sucesso!</p>

		<?php } else { 
			
			?>
		<p class="text-danger">Erro ao remover o produto!</p>

	<?php }
				 
	?>

?>
<?php include("rodape.php"); ?>
