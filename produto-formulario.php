<?php include("cabecalho.php"); ?>
<style type="text/css">
	body{
		background-color: #FFFFFF;
	}
</style>
<h1 style="color: #00BFFF">Formulário de Cadastro</h1>
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
				<td><input style="background-color: #008B8B" class="btn btn-primary" type="submit" value="Cadastrar" ></td>
			</tr>
		</table>
	
	</form>
<?php include("rodape.php"); ?>