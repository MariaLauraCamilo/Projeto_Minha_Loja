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

$produto->setId(isset($_POST["id"]) ? $_POST["id"] : "");
$produto->setCategoria($categoria);
$categoria->setId($_POST["categoria_nome"] ? $_POST["categoria_nome"]  : "");

$produto->setNome(isset($_POST["nome"])  ? $_POST["nome"]  : "");
$produto->setPreco(isset($_POST["preco"]) ? $_POST["preco"] : "");
$produto->setDescricao(isset($_POST["descricao"]) ? $_POST["descricao"] : "");
$produto->setUsado(isset($_POST["usado"]) ? $_POST["usado"] : 0);

$inserir = insereProduto($conexao, $produto);
	
if ($inserir){ ?>

<p class="alert-success">Produto <?= $produto->getNome();?>, <?= $produto->getPreco();?> adicionado com sucesso!</p>
	<tr>
		<td>
			<a href="produto-formulario.php" class="btn btn-primary">Cadastrar mais produtos</a>
			<a href="index.php" class="btn btn-light">Retornar a Minha Loja</a>
		</td>
	</tr>
<?php } else { 	?>

<p class="alert-danger">Produto <?= $produto->getNome();?> não foi adicionado!</p>
	<tr>
		<td><a href="produto-formulario.php" class="btn btn-danger">Tentar Novamente</a></td>
		<a href="index.php" class="btn btn-light">Retornar a Minha Loja</a>
	</tr>
<?php }
				 
?>
<?php require_once("rodape.php"); ?>