create table usuario(

	id_usuario integer PRIMARY KEY AUTO_INCREMENT,
	nome_usuario varchar(60),
	email_usuario varchar(80),
	senha_usuario char(20),
	senha_usuario_confirm char(20),
	foto_usuario varchar(200)	


);

create table postagem(

	id_postagem integer PRIMARY KEY AUTO_INCREMENT,
	data_postagem date,
	texto_postagem text,
	foto_postagem varchar(300),
	usuario_id_usuario integer, 

	foreign key(usuario_id_usuario) references usuario(id_usuario)

);