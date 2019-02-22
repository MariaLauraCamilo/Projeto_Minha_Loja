<?php 
require_once("cabecalho.php"); 
require_once("conexao.php"); 
require_once("banco-produto.php");
require_once("logica-usuario.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");

verificaUsuario();

$produto = new Produto();
$categoria = new Categoria();
$produto->categoria = $categoria;
$produto->nome  = isset($_POST["nome"])  ? $_POST["nome"]  : "";
$produto->preco = isset($_POST["preco"]) ? $_POST["preco"] : "";
$produto->descricao = isset($_POST["descricao"]) ? $_POST["descricao"] : "";
$produto->categoria->id = isset($_POST["categoria_nome"]) ? $_POST["categoria_nome"] : "";
$produto->usado = isset($_POST["usado"]) ? $_POST["usado"] : 0;

	
if (insereProduto($conexao, $produto)){ ?>

<p class="alert-success">Produto <?= $produto->nome;?>, <?= $produto->preco;?> adicionado com sucesso!</p>
	<tr>
		<td>
			<a href="produto-formulario.php" class="btn btn-primary">Cadastrar mais produtos</a>
			<a href="index.php" class="btn btn-light">Retornar a Minha Loja</a>
		</td>
	</tr>
<?php } else { 	?>

<p class="alert-danger">Produto <?= $produto->nome;?> não foi adicionado!</p>
	<tr>
		<td><a href="produto-formulario.php" class="btn btn-danger">Tentar Novamente</a></td>
		<a href="index.php" class="btn btn-light">Retornar a Minha Loja</a>
	</tr>
<?php }
				 
?>
	
<?php require_once("rodape.php"); ?>