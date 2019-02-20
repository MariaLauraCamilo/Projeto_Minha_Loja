<?php
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");

$id = $_GET['id'];
$remover = removeProduto($conexao,$id);
$_SESSION['success'] = "Produto removido com sucesso!";
header("Location:lista-produto.php");
die();
  
 if ($remover){ 
	?>
		<p class="text-success">Produto removido com sucesso!</p>

		<?php } else { 
			
			?>
		<p class="text-danger">Erro ao remover o produto!</p>

	<?php }
				 
	?>
<?php require_once("rodape.php"); ?>