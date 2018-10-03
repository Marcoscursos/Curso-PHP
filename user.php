
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
				<li><a href='user.php?Request=Publicações'>Home</a></li>
				<li><a href='user.php?Request=Amigos'>Logado: Marcos Lopes </a></li>
				<li class="btn_publicar"><a href='user.php?Request=New_publicação'>Publicar</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class="container">
			<div class="titulo">
				<h1>Publicação 2018</h1>
			</div>
			<div class="fundo_container">
				<div class="user_informação">
					<div class="user_foto">
						<img src="https://cdn0.froala.com/assets/editor/docs/server/meta-social/php-00441489844a0103eae71ba2fe15244c.png">
					</div>
					<div class="user_name">
						<h1>@PHP IFMS DOURADOS</h1>
						<span>Postado em 02/10/2018</span>
					</div>
				</div>
				<div class="corpo_publicação">
					<p>'.$registros[2].'</p>
					<div class="foto_publicação">
						<img src="'.$registros[3].'">
					</div>
				</div>
				<div >
					<a href="user.php?Request=editar_postagem&id_postagem='.$registros[0].'"><button>Editar publicação</button></a>
					<a href="user.php?Request=Deletar_postagem&id_postagem='.$registros[0].'&img='.$registros[3].'"><button>Deletar publicação</button></a>
				</div>
			</div>
			</section>
			<section>
				<div class="titulo">
					<h1>Realizar Publicação</h1>
				</div>
				<div class="fundo_container">
					<div class="form_publicação">
						<form action="user.php?Request=salvar_publicação" method="POST" enctype="multipart/form-data">
							<div class="input-container">
								<label>Publição</label>
								<textarea name="publicação"></textarea>
							</div>
							<div class="input-container">
								<label for="add">Adicionar imagem</label>
								<input type="file" name="upload">
							</div>
							<div class="input_btn">
								<input type="submit" value="Publicar">
							</div>
						</form>
					</div>
			</section>
			<section>
				<div class="titulo">
					<h1>Editar publicação</h1>
				</div>
				<div class="fundo_container">
					<div class="form_publicação">
						<form action="user.php?Request=editar_publicação&id='.$id.'" method="POST" enctype="multipart/form-data">
							<div class="input-container">
								<label>Reesreva o texto da postagem:</label>
								<textarea name="publicação">PHP linguagem de programação WEB</textarea>
							</div>
							<div class="input_btn">
								<input type="submit" value="Publicar">
							</div>
						</form>
					</div>
			</section>
				<div class='mensagem'>
					<img src='http://dicasblogin.com/wp-content/uploads/2015/07/404-5B1-5D.png'>
				<div>
	</main>
</body>
</html>
