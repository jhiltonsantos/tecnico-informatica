create database locadora;
use locadora;

create table Cliente(
cod_cli int not null primary key,
nome_cli char(50),
cpf int not null,
cep int not null);

create table Classe(
cod_classe int not null primary key,
nome_cla char(50) not null,
preco float not null);

create table Categoria(
cod_cat int not null primary key,
genero char(50)not null);

create table Titulo(
cod_titulo int not null primary key,
nome_titulo char(50) not null,
dt_lancamento date,
cod_classe int not null references classe(cod_classe),
cod_cat int not null references categoria(cod_cat));

create table Filme(
cod_filme int not null primary key,
nome_distri char(50),
cod_titulo int not null references titulo(cod_titulo));

create table Emprestimo(
cod_emp int not null primary key,
val_mult int null,
dt_emprestimo date not null,
dt_prev_devolucao date,
dt_devolucao date not null,
cod_cli int not null references cliente(cod_cli),
cod_filme int not null references filme(cod_filme));





insert into Cliente values(1,'Zack',1234,64078670);
insert into Cliente values(2,'Phara',2345,64077470);
insert into Cliente values(3,'Axe',4321,64076570);

insert into Filme values(08,'Lucas Films',237);
insert into Filme values(12,'Marvel Studios',234);
insert into Filme values(13,'Columbia Studios',321);

insert into Titulo values(237,'Star Wars Episode 8: The Last Jedi','2017-12-14',2,12345);
insert into Titulo values(234,'Pantera Negra','2018-02-01',1,64891);
insert into Titulo values(321,'Clube da Luta','2004-07-31',2,98745);

insert into Classe values(1,'Lançamento',15);
insert into Classe values(2,'Catalogo',10);

insert into Categoria values(12345,'Animação');
insert into Categoria values(64891,'Drama');
insert into Categoria values(98745,'Aventura/Fantasia');

insert into Emprestimo values(1789,5.65,'2017-06-15','2017-06-22','2017-06-25',1,13);
insert into Emprestimo values(2456,0.00,'2017-11-03','2017-11-10','2017-11-10',2,12);
insert into Emprestimo values(3123,0.00,'2017-10-30','2017-11-06','2017-11-05',3,11);


select * from emprestimo;
select t.nome_titulo from titulo as t inner join filme as f on t.cod_titulo=f.cod_titulo inner join emprestimo as e on e.cod_filme=f.cod_filme inner join cliente as c on c.cod_cli=e.cod_cli where c.nome_cli='Zack';
select a.nome_titulo from titulo a join filme b join emprestimo c join cliente d on a.cod_titulo = b.cod_titulo and b.cod_filme = c.cod_filme and c.cod_cliente = d.cod_cliente where d.nome_cli = 'Zack';
select c.nome_cli from cliente as c inner join emprestimo as e on c.cod_cli = e.cod_cli inner join filme as f on f.cod_filme = e.cod_filme inner join titulo as t on t.cod_titulo = f.cod_titulo where nome_titulo = 'Pantera Negra';

select c.nome_cli from cliente as c inner join emprestimo as e on c.cod_cli = e.cod_cli where val_mult > 0.00; 

select cl.nome_cla from classe as cl inner join titulo as t on cl.cod_classe = t.cod_classe inner join filme as f on t.cod_titulo = f.cod_titulo inner join emprestimo as e on f.cod_filme = e.cod_filme inner join cliente as c on e.cod_cli = c.cod_cli where nome_cli='Phara';