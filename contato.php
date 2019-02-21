<?php require_once("cabecalho.php");?>

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
<h1 style="color: #DC143C">Contato</h1>
<form action="envia-contato.php" method="post">
	<table class="table">
		<tr>
			<td style="color: #696969">Nome</td>
			<td><input class="form-control" type="text" name="nome"><br/></td>
		</tr>
		<tr>
			<td style="color: #696969">Email</td>
			<td><input class="form-control" type="text" name="email"><br/></td>
		</tr>
		<tr>
			<td style="color: #696969">Mensagem</td>
			<td><textarea name="mensagem" class="form-control"></textarea></td>
		</tr>
		<tr>
			<td><button class="btn btn-primary" style="background-color:#006400">Enviar</button></td>
		</tr>
	</table>
</form>

<?php require_once("rodape.php"); ?>