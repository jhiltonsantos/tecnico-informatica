create database rifa;

use rifa;
-- drop database rifa;

CREATE TABLE Usuario(
usuario varchar(30) not null primary key,
senha varchar(30) not null,
nome_completo varchar(100) not null,
telefone_wpp varchar(20) not null,
telefone_2 varchar(20),
email varchar(100) not null,
CPF varchar(20) not null,
Rua varchar(100) not null,
Numero int not null,
Complemento varchar(200) not null,
Bairro varchar(100) not null,
CEP varchar(20) not null,
Cidade varchar(100) not null,
UF varchar(2) not null,
data_nascimento date not null,
sexo varchar(20) not null,
tipo varchar (20) not null
);

insert into usuario values ('Felipi-Braga', '12345', 'Felipi Braga da Silva', '86 98170-1729', '86 995630245', 'felipitecifpi15@gmail.com', 
'004.293.593.81', 'Professor Claudio Ferreira', 1690, 'Perto do Espaço Mundo das Coisas', 'Parque Jurema', '64095-010', 'Teresina', 'PI',
'1999/09/28', 'Masculino', 'Cliente');

CREATE TABLE Rifa (
cod_rifa int PRIMARY KEY auto_increment not null,
nome_rifa varchar(100) not null,
descrição varchar(200) not null,
valor float not null,
Premio varchar(100) not null,
ganhador varchar(30),
status varchar(30) not null,
data_inicio date not null,
data_prev_sorteio date not null,
data_sorteio date,
FOREIGN KEY(ganhador) REFERENCES Usuario (usuario)
);

CREATE TABLE Pontos (
Numero int not null primary key,
Status varchar(20) not null,
cod_rifa int not null,
FOREIGN KEY(cod_rifa) REFERENCES Rifa (cod_rifa)
);

CREATE TABLE Sorteio (
cod_sorteio int PRIMARY KEY auto_increment not null, 
hora_compra time not null,
data_compra date not null,
hora_pagamento time,
data_pagamento date,
status varchar(20) not null,
usuario varchar(30) not null,
Numero int not null,
rifa int not null,
FOREIGN KEY(usuario) REFERENCES Usuario (usuario),
FOREIGN KEY(Numero) REFERENCES Pontos (Numero)
);

select * from Rifa;
Insert Into Rifa values (default, 'Rifa do Amor', 'Rifa para ajudar o povo da 304', 5.00, 'Calça Masculina ou Feminina', null, default,
'2018/02/03', '2018/03/01', null);

select * from Pontos;

select * from Usuario;
insert into Usuario values ('Felipi-', 'IIF0081','Felipi Braga da Silva' ,'(86)981701728', '(86)995573712', 'felipibragadasilva@gmail.com', 
'004.293.593-81', 'Residencial Deus Quer', 34, 'Quadra 08', 'Bom Princípio', '64095-010', 'Teresina', 'PI', '1999/09/28', 'Masculino', 'Cliente');
insert into Usuario values ('Felipi2', 'IIF0081','Felipi Braga da Silva' ,'(86)981701728', '(86)995573712', 'felipibragadasilva@gmail.com', 
'004.293.593-81', 'Residencial Deus Quer', 34, 'Quadra 08', 'Bom Princípio', '64095-010', 'Teresina', 'PI', '1999/09/28', 'Masculino', default);


select * from sorteio;
insert into Sorteio values (default, '17:43', '2018/02/02', null, null, default, 'Felipi2', 6, 1);
