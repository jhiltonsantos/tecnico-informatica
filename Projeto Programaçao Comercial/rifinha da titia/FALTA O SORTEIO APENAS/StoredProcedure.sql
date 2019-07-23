use rifa;

-- Confirma o pagamento, alterando os status das tabelas Pontos e Sorteio
Delimiter //
Create Procedure confirma_pagamento(numero_pr int, data_Paga date, hora_paga time) 
Begin 
Update Sorteio set Status = 'Pagamento Concluído' where numero = numero_pr;
Update Sorteio set data_pagamento = data_paga where numero = numero_pr;
Update Sorteio set hora_pagamento = hora_paga where numero = numero_pr;
Update Pontos set Status = 'Indisponível' where numero = numero_pr;

End//
Delimiter ;
call confirma_pagamento (6, '2018/02/03', '11:19');



-- Torna a pessoa Administradora 
DELIMITER //
Create Procedure Torna_ADM (nome varchar(30))
Begin
	Update Usuario SET tipo='ADM' where usuario = nome; 
End//
DELIMITER ;
call Torna_ADM ('Felipi-');


-- Torna um ADM em Cliente
DELIMITER //
Create Procedure Torna_Cliente (nome varchar(30))
Begin
	Update Usuario SET tipo='Cliente' where usuario = nome; 
End//
DELIMITER ;
call Torna_Cliente ('Felipi-');

-- Pontos de Sorteio de acordo com o nome digitado
Delimiter //
Create Procedure Consulta_Cliente_Nome (nome varchar(30))
BEGIN
	select * from Sorteio where usuario in (select usuario from Usuario where nome_completo like concat('%',nome,'%'));
END//
Delimiter ;

call Consulta_Cliente_Nome ('Fel');


-- Insere Cliente
DELIMITER //
Create Procedure Insere_cliente (usuario varchar(30),senha varchar(30), nome_completo varchar(100), telefone_wpp varchar(20),
telefone_2 varchar(20), email varchar(100), CPF varchar(20), Rua varchar(100), Numero int, Complemento varchar(200), 
Bairro varchar(100), CEP varchar(20), Cidade varchar(100), UF varchar(2), data_nascimento date, sexo varchar(20))
BEGIN

	Insert into Usuario values (usuario, senha, nome_completo, telefone_wpp, telefone_2, email, CPF, Rua, Numero, Complemento, Bairro,
    CEP, Cidade, UF, data_nascimento, sexo, 'Cliente');

END//
Delimiter ;






