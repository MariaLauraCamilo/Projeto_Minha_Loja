<?php include("cabecalho.php"); ?>
	<?php 

		$nome  = isset($_GET["nome"])  ? $_GET["nome"]  : "";
		$preco = isset($_GET["preco"]) ? $_GET["preco"] : "";
		$descricao = isset($_GET["descricao"]) ? $_GET["descricao"] : "";

		$conexao = mysql_connect('localhost', 'root', '', 'minhaloja');
		mysql_select_db ('minhaloja' , $conexao);
		$query = "Insert into produtos (nome, preco, descricao) values ('{$nome}', {$preco}, '{descricao}')";
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
			