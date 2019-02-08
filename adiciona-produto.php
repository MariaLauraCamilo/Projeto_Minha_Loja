<?php include("cabecalho.php"); ?>
	<?php 

		$nome  = isset($_POST["nome"])  ? $_POST["nome"]  : "";
		$preco = isset($_POST["preco"]) ? $_POST["preco"] : "";
		$descricao = isset($_POST["descricao"]) ? $_POST["descricao"] : "";
		$categoria_id = isset($_POST["categoria_nome"]) ? $_POST["categoria_nome"] : "";

		$conexao = mysql_connect('localhost', 'root', '', 'minhaloja');
		mysql_select_db ('minhaloja' , $conexao);
		$query = "Insert into produtos (nome, preco, descricao, categoria_id) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id})";
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
			