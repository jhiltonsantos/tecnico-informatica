<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sorteio</title>
</head>

<body>
<div>
<?php

//Conexao com o banco de dados
include_once './conectbd.php';
$conect = conexao();


//Aqui que acontece o "Sorteio" utilizando a função do mysql RAND() que escolhe aleatoriamente um registro
	
	$sel="SELECT * FROM Sorteio WHERE status = 'Pagamento Concluido' ORDER BY RAND() LIMIT 1,1 ;";
	$query = mysqli_query($conect, $sel);
	//Passando para um array
	$busca = mysqli_fetch_array($query);

	//Faz a busca dos dados do sorteado
	//Tabela Sorteio
	$cod_sorteio = $busca['cod_sorteio'];
	$hora_compra = $busca['hora_compra'];
	$data_compra = $busca['data_compra'];
	$hora_pagamento = $busca['hora_pagamento'];
	$data_pagamento = $busca['data_pagamento'];
	$nome = $busca['usuario'];
	$numero = $busca['numero'];
	$rifa = $busca['rifa'];

	//Exibe o sorteado
	echo "Codigo Sorteado: ".$cod_sorteio."<br>Nome: ".$nome."<br>Data da compra: ".$data_compra."<br>Data do pagamento: ".$data_pagamento."<br>Hora da compra: ".$hora_compra."<br>Hora do pagamento: ".$hora_pagamento."<br>Número: ".$numero."<br>Rifa: ".$rifa."";
	
	$ganhador = "UPDATE Rifa SET ganhador = ".$nome." where cod_rifa = ".$rifa.";";
	
	$manda = mysqli_query($conect, $ganhador);
	
	$deleta = "CALL deleta_pontos (".$rifa.")";
	
	$m_deleta = mysqli_query($conect,$deleta);
	
	
	
	//$conect->close();
	//FALTA VERIFICAR UPDATE NA RIFA E PARAR O SORTEIO (RAND())
?>


</div>
</body>
</html>