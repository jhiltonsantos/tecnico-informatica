use rifa;


-- A cada rifa adicionada, gera os 1000 pontos automaticamente, todo com status Disponível
Delimiter //
Create Trigger tr_pontos_insere After Insert
ON Rifa
FOR EACH ROW
 BEGIN 
    declare contador int default 0;
    contador: loop
		set contador = contador+1;
        if contador<1200 then 
			insert into Pontos values (contador, 'Disponível', new.cod_rifa);
            else
            leave contador;
		end if;
	end loop contador;
    
    END//
Delimiter ;


-- Insere automaticamente o tipo do Usuário como Cliente, apenas podendo ser alterada usando a Procedure Torna_ADM; 
Delimiter //
Create Trigger tr_insert_cliente BEFORE INSERT
ON Usuario
FOR EACH ROW
Begin
	SET new.tipo = 'Cliente';
End//
Delimiter ;

-- Insere automaticamente o status como Aguardando Pagamento, pois o Sorteio acabou de ser inserido
Delimiter //
Create Trigger tr_insert_sorteio BEFORE INSERT
ON Sorteio
FOR EACH ROW
Begin
	SET new.status = 'Aguardando Pagamento';
End//
Delimiter ;

-- Altera Status do Ponto no ato da reserva
Delimiter //
create trigger tr_Pontos_alterastatus After Insert
ON Sorteio
FOR EACH ROW
	BEGIN
    Update Pontos SET Status = 'Pendente' where cod_rifa = new.rifa and Numero = new.Numero; 
    END//
Delimiter ;    

-- Altera Status da Rifa para Em Andamento no ato da inserção
Delimiter //
Create Trigger tr_status_rifa Before Insert
On Rifa
FOR EACH ROW
Begin
	SET new.status = 'Em Andamento';
End//
Delimiter ;
    


