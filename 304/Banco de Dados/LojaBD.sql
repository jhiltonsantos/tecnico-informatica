-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Cliente (
Cod_client int PRIMARY KEY,
Nome varchar (50),
Endereco varchar (50),
Fone varchar (50)
)

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
)

CREATE TABLE Venda (
Valor_total float,
Data_venda date,
Cod_venda int PRIMARY KEY,
Cod_func int,
Cod_client int,
FOREIGN KEY(Cod_func) REFERENCES Funcionario (Cod_func),
FOREIGN KEY(Cod_client) REFERENCES Cliente (Cod_client)
)

CREATE TABLE ItemVenda (
Cod_item int PRIMARY KEY,
Cod_venda int,
Cod_prod int,
Quant_prod int,
ValorProd float,
FOREIGN KEY(Cod_venda) REFERENCES Venda (Cod_venda)
)

CREATE TABLE Produto (
Cod_prod int PRIMARY KEY,
Valor_unitario float,
Produto varchar (50),
Prateleira int,
Marca varchar (50),
Validade date
)

ALTER TABLE ItemVenda ADD FOREIGN KEY(Cod_prod) REFERENCES Produto (Cod_prod)
