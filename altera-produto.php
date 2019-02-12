<?php include("cabecalho.php"); 
include ("conexao.php");
include ("banco-produto.php");

?>
	<?php 
		$id  = isset($_GET["id"])  ? $_GET["id"]  : "";
		$nome  = isset($_GET["nome"])  ? $_GET["nome"]  : "";
		$preco = isset($_GET["preco"]) ? $_GET["preco"] : "";
		$descricao = isset($_GET["descricao"]) ? $_GET["descricao"] : "";
		$categoria_id = isset($_GET["categoria_nome"]) ? $_GET["categoria_nome"] : "";
		$usado = isset($_GET["usado"]) ? $_GET["usado"] : 0;
		
		$altera = alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado);
					
		if ($altera){ 
	?>
		<p class="text-success">Produto <?= $nome;?>, <?= $preco;?> foi alterado com sucesso!</p>

		<?php } else { 
			
			?>
		<p class="text-danger">Produto <?= $nome;?> não foi alterado!</p>

	<?php }
				 
	?>
<?php include("rodape.php"); ?>
			