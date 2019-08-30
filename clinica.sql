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
create table atendentes(
 	id int not null auto_increment primary key,
      	nome varchar (100) not null,
	cpf varchar (11),
	dataNascimento date,
	sexo (1),
	salario float(10),
      	id_endereco int,
      	id_contato int
);
create table exames(
	id int not null auto-increment primary key,
	nome varchar (100) not null
);
create table enderecos(
	id int not null auto_increment primary key,
	logradouro varchar(100),
	bairro varchar(50),
	cidade varchar(50),
	uf varchar(2),
	cep varchar(10)
);
create table pacientes(
	id int not null auto_increment primary key,
	nome varchar(100) not null,
	cpf varchar(11),
	dataNascimento date,
	sexo varchar(1),
	salario float,
	id_endereco int,
	id_contato int

);
create table clinicas(
	id int not null auto-increment primary key,
	nome varchar(100) not null,
	cnpj varchar (14),
	id-endereco int,
	id-contato int
);


