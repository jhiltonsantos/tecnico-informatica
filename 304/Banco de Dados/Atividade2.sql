-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.

CREATE TABLE Cliente (
Cod_client int PRIMARY KEY,
Nome varchar (50),
Endereco varchar (50),
Fone varchar (50)
);

CREATE TABLE Funcionario (
Fone varchar (50),
Nome varchar (50),
Cod_func int PRIMARY KEY,
Salario_base float,
Endereco varchar (50),
CPF varchar (50),
RG varchar (50),
Cargo varchar (50),
Dt_nasc date,
Dt_adm date
);

CREATE TABLE Venda (
Valor_total float,
Data_venda date,
Cod_venda int PRIMARY KEY,
Cod_func int,
Cod_client int,
FOREIGN KEY(Cod_func) REFERENCES Funcionario (Cod_func),
FOREIGN KEY(Cod_client) REFERENCES Cliente (Cod_client)
);

CREATE TABLE ItemVenda (
Cod_item int PRIMARY KEY,
Cod_venda int,
Cod_prod int,
Quant_prod int,
ValorProd float,
FOREIGN KEY(Cod_venda) REFERENCES Venda (Cod_venda)
);

CREATE TABLE Produto (
Cod_prod int PRIMARY KEY,
Valor_unitario float,
Produto varchar (50),
Prateleira int,
Marca varchar (50),
Validade date
);

ALTER TABLE ItemVenda ADD FOREIGN KEY(Cod_prod) REFERENCES Produto (Cod_prod);

/*Entidade Cliente*/
/*1ª Questão*/
select nome from Cliente;
/*2ª Questão*/
select * from Cliente where Cod_client between 124 and 126;
/*3ª Questão*/
update Cliente set nome = 'Ana Maria' where Cod_client = 125;
 
/*Entidade Funcionario*/
/*1ª Questão*/
delete from Funcionario where Cod_func = 105;
/*2ª Questão*/
select * from Funcionario where Dt_nasc between 01-01-1980 and 31-12-1995;
/*3ª Questão*/
select Nome from Funcionario where Salario_base > 800;

/*Entidade Venda*/
/*1ª Questão*/
select Cod_venda from Venda where Valor_total > 80;
/*2ª Questão*/
select Data_venda from Venda where Cod_func = 103;
/*3ª Questão*/
select * from Venda where Cod_venda = 222;

/*Entidade Produto*/
/*1ª Questão*/
update Produto set Valor_unitario = (20 * 100) / Valor_unitario + Valor_unitario;
/*2ª Questão*/
delete from Produto where Cod_prod = 016;
/*3ª Questão*/
select Produto from Produto where Validade between 01-07-2018 and 31-07-2018;




