<html>
<head>
  <title>Formulario de Contato</title>
</head>
<body>
					
		<div style="margin: 100px auto 0;width: 300px;">
			<h3>Formulario de Contato</h3>
			<form name="form1" id="form1" action="func_enviar.php" method="post">
					<fieldset>
					  <input type="text" name="nome" placeholder="Nome" />
					  <br />
					  <input type="text" name="assunto" placeholder="Assunto" />
					  <br />
					  <input type="text" name="telefone" placeholder="Telefone" />
					  <br />
					  <input type="text" name="email" placeholder="Email" />
					  <br />
					  <textarea rows="4" cols="20" name="comentario" placeholder="Comentario"></textarea>
					  <br />
					  <input type="submit" name="submit" value="Send" />
					</fieldset>
			</form>
			<p><?php if(!empty($message)) echo $message; ?></p>
		</div>
					
</body>
</html>