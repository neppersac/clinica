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
	CREATE TABLE atendente(
    id int not null auto_increment primary key,
      nome varchar (100) not null,
cpf varchar (11),
dataNascimento date,
sexo (1),
salario float(10),
      id_endereco int,
      id_contato int
);

