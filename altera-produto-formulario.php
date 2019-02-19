<?php include("cabecalho.php"); 
include ("conexao.php");
include ("banco-categoria.php");
include ("banco-produto.php");

$id  = isset($_GET["id"])  ? $_GET["id"]  : "";
$produto = buscaProduto($conexao,$id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>


<style type="text/css">
	body{
		background-color: #FFFFFF;
	}
</style>

<h1 style="color: #DC143C">Formulário do Produto</h1>
<form action="altera-produto.php" method="GET">
	<input type="hidden" name="id" value="<?=$produto['id']?>">
	<table class="table">
		
		<?php include("produto-formulario-base.php"); ?>

		<tr>
			<td><input style="background-color:#006400" class="btn btn-primary" type="submit" value="Salvar"></td>
		</tr>
	</table>
</form>
<?php include("rodape.php"); ?>