<?php include("cabecalho.php"); ?>
	<?php 

		$nome  = isset($_GET["nome"])  ? $_GET["nome"]  : "";
		$preco = isset($_GET["preco"]) ? $_GET["preco"] : "";
		$conexao = mysql_connect('localhost', 'root', '', 'minhaloja');
		mysql_select_db ('minhaloja' , $conexao);
		$query = "Insert into produtos (nome, preco) values ('{$nome}', {$preco})";
		$resultado = mysql_query($query,$conexao);
				
					
		if ($resultado){ 
	?>
		<p class="text-success">Produto <?= $nome;?>, <?= $preco;?> adicionado com sucesso!</p>

		<?php } else { 
			
			?>
		<p class="text-danger">Produto <?= $nome;?> não foi adicionado!</p>

	<?php }
				 
	?>
<?php include("rodape.php"); ?>
			