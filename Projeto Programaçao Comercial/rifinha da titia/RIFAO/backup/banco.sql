create database banco2;
use banco2;

CREATE TABLE sorteados (
  ip varchar(20) NOT NULL,
  data date NOT NULL,
  hora time NOT NULL,
  id_nome int(20) NOT NULL,
  id int(20) NOT NULL PRIMARY KEY auto_increment

) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;

 
-- Extraindo dados da tabela `sorteados`


INSERT INTO sorteados (ip, data, hora, id_nome, id) VALUES 
('127.0.0.1', '2010-12-11', '00:09:06', 2, 1),
('127.0.0.1', '2010-12-11', '00:09:08', 1, 2),
('127.0.0.1', '2010-12-11', '00:11:17', 3, 3),
('127.0.0.1', '2010-12-11', '00:11:34', 4, 4);


-- Estrutura da tabela `nomes`


CREATE TABLE nomes (
  nome varchar(250) NOT NULL,
  id int(20) NOT NULL PRIMARY KEY auto_increment
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;

 
-- Extraindo dados da tabela `nomes`
 

INSERT INTO nomes (nome, id) VALUES ('robson ricardo', 1);
INSERT INTO nomes (nome, id) VALUES ('ricardo silva', 2);
INSERT INTO nomes (nome, id) VALUES ('maicon santos', 3);
INSERT INTO nomes (nome, id) VALUES ('silvia oliveira', 4);





