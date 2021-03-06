<?php 
require_once("cabecalho.php"); 
require_once("conexao.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");


verificaUsuario();

$produto = new Produto();
$categoria = new Categoria();

$listaCategorias = listaCategorias($conexao);
$produto->produto_array = array('nome' => "", 'descricao' => "", 'preco' => "", 'categoria->id' => "1");
$produto->getUsado();
?>


<style type="text/css">
	body{
		background-color: #FFFFFF;
	}
	form {
	    /* Apenas para centralizar o form na página */
	    margin: 0 auto;
	    width: 1100px;
	    /* Para ver as bordas do formulário */
	    padding: 2em;
	    border: 2px solid #CCC;
	    border-radius: 2em;
		}
</style>

<h1 style="color: #DC143C">Formulário de Cadastro</h1>
	<form action="adiciona-produto.php" method="POST">
		<table class="table">
			
			<?php require_once("produto-formulario-base.php"); ?>
			
			<tr>
				<td><input style="background-color:#006400" class="btn btn-primary" type="submit" value="Cadastrar"></td>
			</tr>
		</table>
	</form>
<?php require_once("rodape.php"); ?>