<?php 
require_once("cabecalho.php"); 
require_once ("banco-categoria.php");
require_once("logica-usuario.php");

$produto = array('nome' => "", 'descricao' => "", 'preco' => "", 'categoria_id' => "1");
$usado = "";
verificaUsuario();

$categorias = listaCategorias($conexao);
 
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