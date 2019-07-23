CREATE DATABASE sorteio;
USE sorteio;

CREATE TABLE IF NOT EXISTS cadastro (
  id int(11) NOT NULL auto_increment,
  nome varchar(100) NOT NULL,
  sobrenome varchar(300) NOT NULL,
  dia varchar(2) NOT NULL,
  mes varchar(2) NOT NULL,
  ano varchar(4) NOT NULL,
  email varchar(100) NOT NULL,
  cidade varchar(100) NOT NULL,
  resposta varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO cadastro (id, nome, sobrenome, dia, mes, ano, email, cidade, resposta) 
VALUES(1,"Jose","Santos","09","03","2000","jhilton930@outlook.com", "Teresina", "Temer");

SELECT * FROM cadastro;