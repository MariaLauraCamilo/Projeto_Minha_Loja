<?php 
require_once("cabecalho.php"); 
require_once ("banco-produto.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");
?>
<?php 

	$produto = new Produto();
	$categoria = new Categoria();

	$produto->setId(isset($_GET["id"])  ? $_GET["id"]  : "");
	$produto->setCategoria($categoria);
	$categoria->setId($_GET["categoria_nome"] ? $_GET["categoria_nome"]  : "");
	
	
	$produto->setNome(isset($_GET["nome"])  ? $_GET["nome"]  : "");
	$produto->setPreco(isset($_GET["preco"]) ? $_GET["preco"] : "");
	$produto->setDescricao(isset($_GET["descricao"]) ? $_GET["descricao"] : "");
	$produto->setUsado(isset($_GET["usado"]) ? $_GET["usado"] : 0);
	
	$altera = alteraProduto($conexao, $produto);
	if ($altera){ 
?>
	<p class="text-success">Produto <?= $produto->getNome();?>, <?= $produto->getPreco();?> foi alterado com sucesso!</p>

	<?php } else { 
			
		?>
	<p class="text-danger">Produto <?= $produto->getNome();?> não foi alterado!</p>

<?php }
				 
?>
<?php require_once("rodape.php"); ?>			