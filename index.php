<?php include("cabecalho.php"); ?>
<?php  
if ($_GET["login"] && $_GET["login"]== true) { ?>
	<p class="alert-success">Logado com Sucesso!</p>
<?php } else { ?>
	<p class="alert-danger">Não foi possivel logar!</p>
<?php } ?>
<style type="text/css">
		body {
			background-color: #FFFFFF;
		}
		form {
	    /* Apenas para centralizar o form na página */
	    margin: 0 auto;
	    width: 400px;
	    /* Para ver as bordas do formulário */
	    padding: 1em;
	    border: 1px solid #CCC;
	    border-radius: 1em;
		}
	</style>
	<h1 style="color: #DC143C;">Bem Vindo!</h1>
	<h2>Login</h2>
	<form action="login.php" method="post" style="background-color: #DCDCDC">
		<td><br></td>
		<label>Email:</label><input type="text" name="email" style=" padding: 0.5em;
	    border: 0.5px solid #CCC; border-radius: 0.5em ;"><br>
	    <td><br></td>
		<label>Senha:</label><input type="password" name="senha" style=" padding: 0.5em;
	    border: 0.5px solid #CCC; border-radius: 0.5em;"><br>
	    <td><br></td>
		<input type="submit" value="Entrar" name="entrar" style="background-color:#006400" class="btn btn-primary">
	</form>
<?php include("rodape.php");?>