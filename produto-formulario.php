<?php include("cabecalho.php"); ?>
<style type="text/css">
	body{
		background-color: #FFFFFF;
	}
</style>
<h1 style="color: #DC143C">Formulário de Cadastro</h1>
	<form action="adiciona-produto.php">
		<table class="table">
			<tr>
				<td style="color: #696969">Nome</td>
				<td><input class="form-control" type="text" name="nome"><br/></td>

			</tr>

			<tr>
				<td style="color: #696969">Preço</td>
				<td><input class="form-control" type="number" name="preco"><br/></td>
			</tr>
			<tr>
				<td>Descrição</td>
				<td><textarea name="descricao" class="form-control"></textarea></td>
			</tr>
			<tr>
				<td><input style="background-color:#4682B4" class="btn btn-primary" type="submit" value="Cadastrar" ></td>
			</tr>
			
		</table>
	
	</form>
<?php include("rodape.php"); ?>