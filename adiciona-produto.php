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
		<p class="text-success">Produto <?= $nome;?>, <?= $preco;?> adicionado com sucesso!</p>

		<?php } else { 
			
			?>
		<p class="text-danger">Produto <?= $nome;?> não foi adicionado!</p>

	<?php }
				 
	?>
<?php include("rodape.php"); ?>
			