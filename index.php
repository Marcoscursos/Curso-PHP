
<!DOCTYPE html>
<html>
<head>
	<title>Connect IF</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header>
		<div class="logo">
			<h1><i class="fas fa-broadcast-tower"></i> Connect IF</h1>
		</div>
		<nav>
			<ul>
				<li><a href='index.php?Request=logar_conta'>Entrar conta</a></li>
				<li><a href='index.php?Request=cadastrar_conta'>Cadastrar conta</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section>
		 	<div class="titulo">
				<h1>Acesse sua conta</h1>
			</div>
		 	<div class="fundo_container">
			 	<form action="index.php?Request=entrar" method="POST">
			 		<div class="input-container">
						<label for="Usuário">Nome usuário:</label>
						<input type="text" name="usuário" required>
					</div>
					<div class="input-container">
						<label for="senha">Senha usuário:</label>
						<input type="text" name="senha" required>
					</div>
					<div class="form-btn">
						<input type="submit" value="Acessar Conta">
					</div>
			 	</form>
		 	</div>
		 </section>
		 <section>
		 	<div class="titulo">
				<h1>Faça parte da comunidade Connect IF</h1>
			</div>
		 	<div class="fundo_container">
			 	<form>
			 		<div class="input-container">
						<label for="Usuário">Nome :</label>
						<input type="text" name="usuário">
					</div>
					<div class="input-container">
						<label for="senha">Senha :</label>
						<input type="text" name="senha">
					</div>
					<div class="input-container">
						<label for="senha">Senha confirmar:</label>
						<input type="text" name="senha_confirmar">
					</div>
					<div class="input-container">
						<label for="senha">E-mail :</label>
						<input type="text" name="senha">
					</div>
					<div class="input-container">
						<label for="foto">Foto perfil:</label>
						<input type="text" name="foto">
					</div>
					<div class="form-btn">
						<input type="submit" value="Cadastrar Conta">
						<input type="reset" value="Limpar campos">
					</div>
			 	</form>
		 	</div>
		 </section>
	</main>
</body>
</html>