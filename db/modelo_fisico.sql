CREATE TABLE usuario
(
	id_usuario INT NOT NULL AUTO_INCREMENT,
	email_usuario VARCHAR(70),
	sexo_usuario CHAR(1),
	senha VARCHAR(500) NOT NULL,
	PRIMARY KEY (id_usuario),
	
);

CREATE TABLE contato
(
	id_contato INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	email_contato VARCHAR(70),
	sexo_contato CHAR(1),
	id_usuario INT NOT NULL,
	PRIMARY KEY (id_contato),
	FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE tipo_telefone
(
	id_tipo_telefone INT NOT NULL AUTO_INCREMENT,
	nome_tipo VARCHAR(15) NOT NULL,
	PRIMARY KEY (id_tipo_telefone)
);

CREATE TABLE telefone
(
	id_numero INT NOT NULL AUTO_INCREMENT,
	numero VARCHAR(16) NOT NULL,
	id_contato INT NOT NULL,
	id_tipo_telefone INT NOT NULL,
	PRIMARY KEY(id_numero),
	FOREIGN KEY(id_tipo_telefone) REFERENCES tipo_telefone(id_tipo_telefone),
	FOREIGN KEY(id_contato) REFERENCES contato(id_contato)
);


