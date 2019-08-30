CREATE DATABASE clinica;
use clinica;
create table contatos(
  id int not null auto_increment primary key,
	fone varchar(15),
	email varchar(100)
);
create table convenios(
	id int not null auto_increment primary key,
	numero varchar(15),
	nome varchar(50)
);
creat table enderecos(
	id int not null auto_increment primary key, 
	logradouro varchar(100),
	bairro varchar(50),
	cidade varchar(50), 
	uf varchar(2),
	cep varchar(10)
);

