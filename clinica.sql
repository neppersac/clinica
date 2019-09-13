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
create table atendente(
 	id int not null auto_increment primary key,
      	nome varchar (100) not null,
	cpf varchar (11),
	dataNascimento date,
	sexo varchar (1),
	salario float,
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

create table medicos(
	id int not null auto_increment primary key,
	nome varchar(100) not null,
	crm varchar(15),
	id_endereco int,
	id_contato int
	
);
create table consultas(
	id int not null auto-increment primary key,
	data datetime,
	data-agendamento datetime,
	id-atendente int,
	id-clinica int
	id-exame int,
	id-receita int,
	id-medico int,
	id-paciente int,
	id-convenio int,
	diaginostico text
);


