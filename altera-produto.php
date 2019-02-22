<?php 
require_once("cabecalho.php"); 
require_once ("banco-produto.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");
?>
<?php 

	$produto = new Produto();
	$categoria = new Categoria();
	$produto->categoria = $categoria;

	$categoria->id = $_GET['id'] ? $_GET['id']  : "";;
	$produto->id  = isset($_GET["id"])  ? $_GET["id"]  : "";
	$produto->nome  = isset($_GET["nome"])  ? $_GET["nome"]  : "";
	$produto->preco = isset($_GET["preco"]) ? $_GET["preco"] : "";
	$produto->descricao = isset($_GET["descricao"]) ? $_GET["descricao"] : "";
	$produto->categoria->id = isset($_GET["categoria_nome"]) ? $_GET["categoria_nome"] : "";
	$produto->usado = isset($_GET["usado"]) ? $_GET["usado"] : 0;
		
	$altera = alteraProduto($conexao, $produto);
				
	if ($altera){ 
?>
	<p class="text-success">Produto <?= $produto->nome;?>, <?= $produto->preco;?> foi alterado com sucesso!</p>

	<?php } else { 
			
		?>
	<p class="text-danger">Produto <?= $produto->nome;?> não foi alterado!</p>

<?php }
				 
?>
<?php require_once("rodape.php"); ?>			