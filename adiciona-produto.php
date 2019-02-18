<?php include("cabecalho.php"); 
include ("conexao.php");
include ("banco-produto.php");
include("logica-usuario.php");

verificaUsuario();
?>
	<?php 

		$nome  = isset($_POST["nome"])  ? $_POST["nome"]  : "";
		$preco = isset($_POST["preco"]) ? $_POST["preco"] : "";
		$descricao = isset($_POST["descricao"]) ? $_POST["descricao"] : "";
		$categoria_id = isset($_POST["categoria_nome"]) ? $_POST["categoria_nome"] : "";
		$usado = isset($_POST["usado"]) ? $_POST["usado"] : 0;

		
	
		if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){ 
	?>
		<p class="alert-success">Produto <?= $nome;?>, <?= $preco;?> adicionado com sucesso!</p>
		<tr>
			<td>
				<a href="produto-formulario.php" class="btn btn-primary">Cadastrar mais produtos</a>
				<a href="index.php" class="btn btn-light">Retornar a Minha Loja</a>
			</td>
		</tr>
		<?php } else { 	?>
		<p class="alert-danger">Produto <?= $nome;?> não foi adicionado!</p>
		<tr>
			<td><a href="produto-formulario.php" class="btn btn-danger">Tentar Novamente</a></td>
			<a href="index.php" class="btn btn-light">Retornar a Minha Loja</a>
		</tr>
	<?php }
				 
	?>
	
	
<?php include("rodape.php"); ?>
			
