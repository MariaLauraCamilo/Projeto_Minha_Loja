<?php 
require_once("cabecalho.php"); 
require_once("logica-usuario.php");
require_once("alerta.php");
?>
<?php 
alerta("success");
alerta("danger");
?>
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
	<?php 
	//Validação de cookie
		if (UsuarioEstaLogado()){ ?>
		<p class="text-success">Você está logado como <?=usuarioLogado()?><a href="logout.php"><br/>Deslogar</a></p>
		<?php } else { ?>
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
	<?php } ?>
<?php require_once("rodape.php");?>