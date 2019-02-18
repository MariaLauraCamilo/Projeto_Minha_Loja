<?php
      include("cabecalho.php");
      include("conexao.php");
      include("banco-produto.php");
      include("logica-usuario.php");

$id = $_GET['id'];
removeProduto($conexao,$id);
$_SESSION['success'] = "Produto removido com sucesso!";
header("Location: lista-produto.php");
die();
   
 if (removeProduto($conexao,$id)){ 
	?>
		<p class="text-success">Produto removido com sucesso!</p>

		<?php } else { 
			
			?>
		<p class="text-danger">Erro ao remover o produto!</p>

	<?php }
				 
	?>

?>
<?php include("rodape.php"); ?>
